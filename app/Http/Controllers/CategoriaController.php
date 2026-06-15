<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        Categoria::create([
            'nomeCategoria' => $request->nomeCategoria
        ]);

        return redirect()->route('categorias.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, string $id)
    {
        $categoria = Categoria::findOrFail($id);

        $categoria->update([
            'nomeCategoria' => $request->nomeCategoria
        ]);

        return redirect()->route('categorias.index');
    }

    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);

        if ($categoria->tarefas()->count() > 0) {
            return back()->with('erro', 'Existem tarefas associadas.');
        }

        $categoria->delete();

        return redirect()->route('categorias.index');
    }

    public function estatisticas()
    {
        $categorias = Categoria::with('tarefas')->get();

        return view('categorias.estatisticas', compact('categorias'));
    }
}