<?php

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

Route::get('/', function () {return view('welcome');});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {return view('dashboard');})->name('dashboard');

//Clientes
Route::get('paqueteria', [\App\Http\Controllers\CajasController::class,'index'])->name('clientes');
Route::get('paqueteria/crear', [\App\Http\Controllers\clientes\ClientesController::class,'create'])->name('clientes.crear');
Route::post('paqueteria/guardar', [\App\Http\Controllers\clientes\ClientesController::class,'guardado'])->name('clientes.guardar');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
