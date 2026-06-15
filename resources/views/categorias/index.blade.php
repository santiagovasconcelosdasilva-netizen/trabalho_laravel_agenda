@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-4">
    <h1>Categorias</h1>

    <a href="{{ route('categorias.create') }}"
       class="btn btn-success">
        Nova Categoria
    </a>
</div>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>

    @foreach($categorias as $categoria)

        <tr>

            <td>{{ $categoria->id }}</td>

            <td>{{ $categoria->nomeCategoria }}</td>

            <td>

                <a href="{{ route('categorias.edit', $categoria->id) }}"
                   class="btn btn-warning btn-sm">
                    Editar
                </a>

                <form
                    action="{{ route('categorias.destroy', $categoria->id) }}"
                    method="POST"
                    style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Eliminar
                    </button>

                </form>

            </td>

        </tr>

    @endforeach

    </tbody>

</table>

@endsection