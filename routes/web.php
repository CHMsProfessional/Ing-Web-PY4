<?php

use App\Http\Controllers\AdopcionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ReferenciaController;
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

Route::view('/', "welcome") -> name('welcome');

// clientes

Route::get('/clientes', [ClienteController::class, 'index']) -> name('cliente.index');

Route::get('/clientes/create', [ClienteController::class, 'create']) -> name('cliente.create');

Route::post('/clientes', [ClienteController::class, 'store']) -> name('cliente.store');

Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit']) -> name('cliente.edit');

Route::patch('/clientes/{cliente}', [ClienteController::class, 'update']) -> name('cliente.update');

Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy']) -> name('cliente.destroy');

// mascotas

Route::get('/mascotas', [MascotaController::class, 'index']) -> name('mascota.index');

Route::get('/mascotas/create', [MascotaController::class, 'create']) -> name('mascota.create');

Route::post('/mascotas', [MascotaController::class, 'store']) -> name('mascota.store');

Route::get('/mascotas/{mascota}/edit', [MascotaController::class, 'edit']) -> name('mascota.edit');

Route::patch('/mascotas/{mascota}', [MascotaController::class, 'update']) -> name('mascota.update');

Route::delete('/mascotas/{mascota}', [MascotaController::class, 'destroy']) -> name('mascota.destroy');

// adopciones

Route::get('/adopciones', [AdopcionController::class, 'index']) -> name('adopcion.index');

Route::get('/adopciones/create', [AdopcionController::class, 'create']) -> name('adopcion.create');

Route::post('/adopciones', [AdopcionController::class, 'store']) -> name('adopcion.store');

//Route::get('/adopciones/{adopcion}/edit', [AdopcionController::class, 'edit']) -> name('adopcion.edit');

Route::patch('/adopciones/{adopcion}', [AdopcionController::class, 'update']) -> name('adopcion.update');

Route::delete('/adopciones/{adopcion}', [AdopcionController::class, 'destroy']) -> name('adopcion.destroy');

// referencias

Route::get('/referencias/{cliente}', [ReferenciaController::class, 'index']) -> name('referencia.index');

Route::get('/referencias/create/{cliente_id}', [ReferenciaController::class, 'create']) -> name('referencia.create');

Route::post('/referencias', [ReferenciaController::class, 'store']) -> name('referencia.store');

Route::get('/referencias/{referencia}/edit', [ReferenciaController::class, 'edit']) -> name('referencia.edit');

Route::patch('/referencias/{referencia}', [ReferenciaController::class, 'update']) -> name('referencia.update');

Route::delete('/referencias/{referencia}', [ReferenciaController::class, 'destroy']) -> name('referencia.destroy');





