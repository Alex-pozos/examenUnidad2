<?php

use App\Http\Controllers\LibrosController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', WelcomeController::class)->name('index');

Route::get('mostrar/{id}', [LibrosController::class, 'mostrar'])->name('mostrar.mostrar');

Route::get('crear', [LibrosController::class, 'crear'])->name('mostrar.crear');

Route::post('crear_libro', [LibrosController::class, 'store'])->name('mostrar.store');

Route::get('mostrar/{libro}/editar', [LibrosController::class, 'editar'])->name('mostrar.editar');

Route::put('mostrar/{libro}', [LibrosController::class, 'actualizar'])->name('mostrar.actualizar');

Route::delete('mostrar/{libro}', [LibrosController::class, 'eliminar'])->name('mostrar.eliminar');