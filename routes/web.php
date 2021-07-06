<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevistasController;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\HomeController;

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
//Home
Route::get('/', [HomeController::class,'index'])->name('home');
//Revistas
Route::get('revistas', [RevistasController::class,'index'])->name('revistas');
Route::post('agregarRe', [RevistasController::class,'agregar'])->name('agregarRevista');
Route::delete('eliminar/{revista}', [RevistasController::class,'eliminar'])->name('eliminarRevista');
//Articulos
Route::get('articulos', [ArticulosController::class,'index'])->name('articulos');
Route::post('agregarAr', [ArticulosController::class,'agregar'])->name('agregarArticulo');
Route::delete('eliminar/{articulo}', [ArticulosController::class,'eliminar'])->name('eliminarArticulo   ');
