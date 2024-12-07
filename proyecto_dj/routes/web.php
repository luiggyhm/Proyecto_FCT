<?php

use App\Http\Controllers\AnuncioController;
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

//rutas creadas visibles para todos

//Muestra la vista inicio si accede a /
Route::get('/', [NavController::class, 'home'])->name('nav.inicio');

//Muestra la vista de Conoceme
Route::get('/conoceme', [NavController::class, 'conoceme'])->name('nav.conoceme');

//Muestra la vista de Venta Contenido
Route::get('/compraContenido', [NavController::class, 'compraContenido'])->name('nav.compraContenido');

//Muestra todos los anuncios
Route::get('/todosLosAnuncios', [AnuncioController::class, 'index'])->name('todosLosAnuncios');
Route::get('/anuncios/genero/{genero}', [AnuncioController::class, 'genero'])->name('anuncio.genero');
Route::get('/anuncios/crear', [AnuncioController::class, 'create'])->name('anuncio.formAnuncio');
Route::post('/registroAnuncio', [AnuncioController::class, 'store'])->name('anuncio.store');
Route::get('/detalle/{id}', [AnuncioController::class, 'show'])->name('anuncio.show');
Route::get('/anuncios/dj', [AnuncioController::class, 'djs'])->name('anunciosDjs');
Route::get('/anuncios/Negocios', [AnuncioController::class, 'negocios'])->name('anunciosNegocios');


Route::get('/registrar', [UserController::class, 'index'])->name('registrarse');
Route::post('/registro', [UserController::class, 'store'])->name('usuario.store');

//pagos
Route::post('/pagarConStripe', [SuscripcionController::class, 'pagarConStripe'])->name('pagarConStripe');
Route::get('/estadoPagoStripe', [SuscripcionController::class, 'estadoPagoStripe'])->name('estadoPagoStripe');







require __DIR__.'/auth.php';
