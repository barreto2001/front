<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\EspecializacionController;
use App\Http\Controllers\TipoDocumentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Metodo de obtención de la informacion de los prodcutoss mediante api rest  */
Route::get('portfolio', [App\Http\Controllers\PortFolioController::class, 'index'])->name('portfolio.index');
Route::get('portfolio/{$id}', [App\Http\Controllers\PortFolioController::class, 'show'])->name('portfolio.show');

