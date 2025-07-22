<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Agrupamos todas las rutas bajo el middleware 'auth'
Route::middleware('auth')->group(function () {
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/posts/create', [PostController::class, 'create']);
    Route::get('/posts/edit', [PostController::class, 'edit']);
    Route::get('/posts/{id}', [PostController::class, 'show']);
});

//rutas de autenticacion
// Mostrar formulario de login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// iniciar la sesion
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
// Cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
// Mostrar formulario de registro
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Procesar registro
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
