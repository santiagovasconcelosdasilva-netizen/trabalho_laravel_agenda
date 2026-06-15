<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\CategoriaController;
use App\Models\Tarefa;

Route::get('/', function () {

    return view('dashboard', [
        'total' => Tarefa::count(),
        'porIniciar' => Tarefa::where('estado', 'Por Iniciar')->count(),
        'emCurso' => Tarefa::where('estado', 'Em Curso')->count(),
        'concluidas' => Tarefa::where('estado', 'Concluída')->count(),
    ]);

});

Route::resource('tarefas', TarefaController::class);
Route::resource('categorias', CategoriaController::class);

Route::get(
    '/estatisticas',
    [CategoriaController::class, 'estatisticas']
)->name('estatisticas');