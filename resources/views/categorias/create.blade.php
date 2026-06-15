@extends('layouts.app')

@section('content')

<h1>Nova Categoria</h1>

<form action="{{ route('categorias.store') }}"
      method="POST">

    @csrf

    <div class="mb-3">

        <label>Nome da Categoria</label>

        <input
            type="text"
            name="nomeCategoria"
            class="form-control">

    </div>

    <button class="btn btn-success">
        Guardar
    </button>

</form>

@endsection