<?php

use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\FtpUserController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuscripcionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Barra nav
Route::controller(NavController::class)->group(function () {
    Route::get('/',  'home')->name('nav.inicio');
    Route::get('/conoceme', 'conoceme')->name('nav.conoceme');
    Route::get('/compraContenido', 'compraContenido')->name('nav.compraContenido');
});

//Anuncios
Route::controller(AnuncioController::class)->group(function () {
    //Mostrar Anuncios
    Route::get('/anuncios/todos', 'index')->name('todosLosAnuncios');
    Route::get('/anuncios/dj', 'mostrarDjs')->name('anuncios.mostrarDjs');
    Route::get('/anuncios/Negocios', 'negocios')->name('anuncios.mostrarNegocios');
    Route::get('/anuncio/detalle/{id}', 'show')->name('anuncios.show');

    //Ver generos
    Route::get('/anuncios/genero/{genero}', 'genero')->name('anuncios.genero');

    //Crear Anuncio
    Route::get('/anuncios/crear', 'create')->name('anuncios.formAnuncio');
    Route::post('/registroAnuncio', 'store')->name('anuncios.store');

    //Modificar anuncio
    Route::get('/anuncio/{anuncio}/editar', 'edit')->name('anuncios.edit');
    Route::put('/anuncio/{anuncio}', 'update')->name('anuncios.actualizar');

    //Eliminar anuncio
    Route::delete('/anuncio/{anuncio}', 'destroy')->name('anuncio.eliminar');
});

//Usuarios
Route::controller(UserController::class)->group(function () {
    //crear Usuario
    Route::get('/registrar', 'index')->name('registrarse');
    Route::get('/usuario/formularioRegistro', 'create')->name('usuario.create');
    Route::post('/usuario/registro', 'store')->name('usuario.store');

    //modificar usuario
    Route::get('/usuario/{usuario}/editar', 'edit')->name('usuario.edit');
    Route::put('/registro/{usuario}', 'update')->name('usuario.actualizar');
});



//Usuarios FTP
Route::controller(FtpUserController::class)->middleware(['auth', 'role:administrador'])->group(function () {
    Route::get('/ftpUser/opciones', 'opciones')->name('ftpUser.elecccion');
    Route::get('/ftpUser/verTodos', 'index')->name('ftpUser.index');
    Route::get('/ftpUser/detalle/{id}', 'show')->name('ftpUser.show');
    Route::get('/ftpUser/inactivos', 'inactivos')->name('ftpUser.inactivos');
    Route::get('/ftpUser/activos', 'activos')->name('ftpUser.activos');

    Route::get('/ftpUsers/inconsistentes', 'usuariosInconsistentes')->name('ftpUser.inconsistentes');

    //cambiar estado activo o inactivo
    Route::get('/ftpUsers/form/activar', 'datosFormActivar')->name('ftpUser.formActivar');
    Route::get('/ftpUsers/form/desactivar', 'datosFormDesactivar')->name('ftpUser.formDesactivar');

    Route::post('/ftpUsers/activar', 'activarUserFtp')->name('ftpUser.activar');
    Route::post('/ftpUsers/desactivar', 'desactivarUserFtp')->name('ftpUser.desactivar');

    //crear Usuario FTP
    Route::get('/registrarFtp', 'create')->name('ftpUser.formAnuncio');
    Route::post('/registroFtp', 'store')->name('ftpUser.store');

    //modificar Usuario FTP
    Route::get('/ftpUsers/ {ftpUser}/editar', 'edit')->name('ftpUser.edit');
    Route::put('/ftpUsers/{ftpUser}', 'update');

    //Eliminar Usuario FTP
    Route::delete('/ftpUsers/eliminado', 'destroy')->name('ftpUser.eliminar');
    Route::get('/ftpUsers/form/eliminar', 'datosFormEliminar')->name('ftpUser.datosFormEliminar');
    
});


//Pagos
Route::controller(SuscripcionController::class)->group(function () {
    //Stripe
    Route::post('/pago/Stripe', 'pagarConStripe')->name('pagarConStripe');
    Route::get('/estadoPagoStripe', 'estadoPagoStripe')->name('estadoPagoStripe');
});

require __DIR__ . '/auth.php';
