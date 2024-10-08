<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\VerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'IniciarSesion'])->name('auth.login');

Route::get('/registro',[RegistroController::class, 'index'])->name('auth.registro');
Route::post('/registro',[RegistroController::class, 'RegistroUsuario'])->name('auth.registro');
// ruta /reset
// ruta /contacto

Route::get('/ver',[VerController::class, 'index']);
Route::get('/ver/{id}',[VerController::class, 'verUsuario']);

Route::get('/dashboard',[VerController::class, 'index'])->name('dashboard');






