<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AnuncioController;


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



//Route::get('/', 'index')->name('anuncios.index');
//Route::get('/anuncios/categoria/{categoria}', 'categoria')->name('anuncios.categoria');
//Route::get('/pago', 'pagar')->name('cliente.pago'); //para autorizzaciones despues->middleware(['auth'])->middleware(['role:cliente']);
