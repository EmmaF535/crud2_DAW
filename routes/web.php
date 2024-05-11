<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\CategoriasController;


Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    '/notes'    =>  NoteController::class,
    '/categories'   => CategoriasController::class
]);