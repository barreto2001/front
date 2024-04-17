<?php

use App\Models\Portfolio;
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
})->name('welcome');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

/* Route::get('/portafolio', function () {
    $portfolio = Portfolio::all();
    return view('portfolio', ['portfolio',$portfolio]);
})->name('portfolio')->middleware('auth'); */

Route::get('/portafolio', [App\Http\Controllers\PortFolioController::class, 'index'])->name('portfolio')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* 
Route::get('/cita', [App\Http\Controllers\CitaController::class, 'create'])->name('cita.create')->middleware('auth');
Route::post('/cita', [App\Http\Controllers\CitaController::class, 'store'])->name('cita.store')->middleware('auth');
Route::get('/cita/{id}', [App\Http\Controllers\CitaController::class, 'show'])->name('cita.show')->middleware('auth');
Route::get('/cita/{cita}', [App\Http\Controllers\CitaController::class, 'edit'])->name('cita.edit')->middleware('auth');
Route::delete('/cita/{id}', [App\Http\Controllers\CitaController::class, 'destroy'])->name('cita.destroy')->middleware('auth');
Route::put('/cita/{id}', [App\Http\Controllers\CitaController::class, 'update'])->name('cita.update')->middleware('auth');

 */