@extends('layouts.app')

@section('content')

<h1>Nova Tarefa</h1>

<form action="{{ route('tarefas.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label class="form-label">Título</label>

        <input
            type="text"
            name="tarefa"
            class="form-control"
            required>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>

        <textarea
            name="descricao"
            class="form-control"
            rows="4"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Categoria</label>

        <select
            name="categoria_id"
            class="form-control">

            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">
                    {{ $categoria->nomeCategoria }}
                </option>
            @endforeach

        </select>
    </div>

    <button type="submit" class="btn btn-success">
        Guardar
    </button>

</form>

@endsection