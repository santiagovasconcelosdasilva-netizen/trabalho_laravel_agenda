<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\CategoriaController;

Route::view('/', 'dashboard');

Route::resource('tarefas', TarefaController::class);
Route::resource('categorias', CategoriaController::class);