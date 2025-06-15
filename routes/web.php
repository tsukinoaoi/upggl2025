<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});

//ruta asignada con un controlador y metodo
Route::get('/posts', [homeController::class,"index"]);
Route::get('/posts/create', [homeController::class,"create"]);
Route::get('/posts/edit', [homeController::class,"edit"]);
Route::get('/posts/{id}', [homeController::class,"show"]);
