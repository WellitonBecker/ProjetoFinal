<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RotinaController;
use App\Http\Controllers\ModuloController;

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

Route::get('/', [MenuController::class, 'index']);

Route::get('/Modulo', [ModuloController::class, 'index']);
Route::get('/Modulo/Alterar/{id}', [ModuloController::class, 'edit']);
Route::get('/Modulo/Incluir', [ModuloController::class, 'inclusao']);
Route::get('/Modulo', [ModuloController::class, 'index']);
Route::get('/Modulo/{id}', [ModuloController::class, 'show']);
Route::delete('/Modulo/{id}', [ModuloController::class, 'destroy']);
Route::post('/Modulo', [ModuloController::class, 'store']);
Route::put('/Modulo/update/{id}', [ModuloController::class, 'update']);

Route::get('/Menu', [MenuController::class, 'index']);
Route::get('/Menu/Alterar/{id}', [MenuController::class, 'edit']);
Route::get('/Menu/Incluir', [MenuController::class, 'inclusao']);
Route::get('/Menu', [MenuController::class, 'index']);
Route::get('/Menu/{id}', [MenuController::class, 'show']);
Route::delete('/Menu/{id}', [MenuController::class, 'destroy']);
Route::post('/Menu', [MenuController::class, 'store']);
Route::put('/Menu/update/{id}', [MenuController::class, 'update']);


Route::get('/Rotina', [RotinaController::class, 'index']);
Route::get('/Rotina/Alterar/{id}', [RotinaController::class, 'edit']);
Route::get('/Rotina/Incluir', [RotinaController::class, 'inclusao']);
Route::get('/Modulo', [ModuloController::class, 'index']);
Route::get('/Rotina/{id}', [RotinaController::class, 'show']);
Route::delete('/Rotina/{id}', [RotinaController::class, 'destroy']);
Route::post('/Rotina', [RotinaController::class, 'store']);
Route::put('/Rotina/update/{id}', [RotinaController::class, 'update']);
