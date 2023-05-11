<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImageController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\PaisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rutas proyecto */
Route::get('/equipos', [App\Http\Controllers\EquiposController::class, 'index'])->name('ejemplo');
Route::get('/imagen', [App\Http\Controllers\ImageController::class, 'index'])->name('imagen');
Route::get('/dinamico', [App\Http\Controllers\PaisController::class, 'index'])->name('dinamico');
