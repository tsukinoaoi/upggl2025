<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});

//ruta asignada con un controlador y metodo
Route::get('/posts', [homeController::class,"index"]);
Route::get('/post/create', [homeController::class,"create"]);
Route::get('/post/edit', [homeController::class,"edit"]);
Route::get('/post/{id}/{categoria}', [homeController::class,"show"]);
