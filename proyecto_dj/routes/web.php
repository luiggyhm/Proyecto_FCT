<?php

use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ProfileController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

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
Route::get('/', [NavController::class, 'home'])->name('inicio');

//Muestra la vista de Conoceme
Route::get('/conoceme', [NavController::class, 'conoceme'])->name('conoceme');

//Muestra la vista de Venta Contenido
Route::get('/compraContenido', [NavController::class, 'compraContenido'])->name('compraContenido');

//Muestra todos los anuncios
Route::get('/anuncios', [AnuncioController::class, 'index'])->name('anuncios.index');



//la ruta para poder ver las img de los perfiles de usuarios
//Route::resource('anuncios', AnuncioController::class);


//pagos
//ruta encargada de ejecutar los pagos
//Route::get ('paypal/pay', PagoController::class, 'pagarConPaypal') -> name ('pagarPaypal');

//Route::get ('paypal/error', PagoController::class, 'estadoPago') -> name ('errorPago');







require __DIR__ . '/auth.php';
