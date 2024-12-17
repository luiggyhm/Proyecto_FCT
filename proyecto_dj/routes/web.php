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
Route::get('/', [NavController::class, 'home'])->name('nav.inicio');
Route::get('/conoceme', [NavController::class, 'conoceme'])->name('nav.conoceme');
Route::get('/compraContenido', [NavController::class, 'compraContenido'])->name('nav.compraContenido');

//Anuncios
//Mostrar Anuncios
Route::get('/anuncios/todos', [AnuncioController::class, 'index'])->name('todosLosAnuncios'); 
Route::get('/anuncios/dj', [AnuncioController::class, 'mostrarDjs'])->name('anuncios.mostrarDjs');
Route::get('/anuncios/Negocios', [AnuncioController::class, 'negocios'])->name('anuncios.mostrarNegocios');
Route::get('/anuncio/detalle/{id}', [AnuncioController::class, 'show'])->name('anuncio.show');

//Ver generos
Route::get('/anuncios/genero/{genero}', [AnuncioController::class, 'genero'])->name('anuncio.genero');

//Crear Anuncio
Route::get('/anuncios/crear', [AnuncioController::class, 'create'])->name('anuncio.formAnuncio');
Route::post('/registroAnuncio', [AnuncioController::class, 'store'])->name('anuncio.store');


//Usuarios
//crear Usuario
Route::get('/registrar', [UserController::class, 'index'])->name('registrarse');
Route::post('/registro', [UserController::class, 'store'])->name('usuario.store');


//Usuarios FTP
Route::get('/ftpUser/opciones', [FtpUserController::class, 'opciones'])->name('ftpUser.elecccion');
Route::get('/ftpUser/verTodos', [FtpUserController::class, 'index'])->name('ftpUser.index');
Route::get('/ftpUser/detalle/{id}', [FtpUserController::class, 'show'])->name('ftpUser.show');

//crear Usuario FTP
Route::get('/registrarFtp', [FtpUserController::class, 'create'])->name('ftpUser.formAnuncio');
Route::post('/registroFtp', [FtpUserController::class, 'store'])->name('ftpUser.store');




//Pagos
//Stripe
Route::post('/pago/Stripe', [SuscripcionController::class, 'pagarConStripe'])->name('pagarConStripe');
Route::get('/estadoPagoStripe', [SuscripcionController::class, 'estadoPagoStripe'])->name('estadoPagoStripe');


require __DIR__.'/auth.php';