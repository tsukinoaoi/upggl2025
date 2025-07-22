<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Agrupamos todas las rutas bajo el middleware 'auth'
Route::middleware('auth')->group(function () {
    Route::get('/posts', [HomeController::class, 'index']);
    Route::get('/posts/create', [HomeController::class, 'create']);
    Route::get('/posts/edit', [HomeController::class, 'edit']);
    Route::get('/posts/{id}', [HomeController::class, 'show']);
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
