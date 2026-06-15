@extends('layouts.app')

@section('content')

<h1>Editar Categoria</h1>

<form action="{{ route('categorias.update', $categoria->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Nome da Categoria</label>

        <input
            type="text"
            name="nomeCategoria"
            value="{{ $categoria->nomeCategoria }}"
            class="form-control">

    </div>

    <button class="btn btn-primary">
        Atualizar
    </button>

</form>

@endsection