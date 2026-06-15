<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\Categoria;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = Tarefa::latest()->get();

        return view('tarefas.index', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    $categorias = Categoria::all();

    return view('tarefas.create', compact('categorias'));
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           Tarefa::create([
         'tarefa' => $request->tarefa,
        'descricao' => $request->descricao,
        'categoria_id' => $request->categoria_id,
        'estado' => 'Por Iniciar'
    ]);

    return redirect()->route('tarefas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tarefa = Tarefa::findOrFail($id);

       return view('tarefas.show', compact('tarefa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(string $id)
{
    $tarefa = Tarefa::findOrFail($id);

    $categorias = Categoria::all();

    return view(
        'tarefas.edit',
        compact('tarefa', 'categorias')
    );
}

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, string $id)
{
    $tarefa = Tarefa::findOrFail($id);

    $tarefa->update([
        'tarefa' => $request->tarefa,
        'descricao' => $request->descricao,
        'categoria_id' => $request->categoria_id,
        'estado' => $request->estado
    ]);

    return redirect()->route('tarefas.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $tarefa = Tarefa::findOrFail($id);

        $tarefa->delete();

        return redirect()->route('tarefas.index');
    }
}
