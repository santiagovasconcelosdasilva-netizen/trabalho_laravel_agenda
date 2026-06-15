@extends('layouts.app')

@section('content')

<h1 class="mb-4">Estatísticas</h1>

<div class="card shadow">

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-dark">

                <tr>
                    <th>Categoria</th>
                    <th>Total de Tarefas</th>
                </tr>

            </thead>

            <tbody>

            @forelse($categorias as $categoria)

                <tr>

                    <td>
                        {{ $categoria->nomeCategoria }}
                    </td>

                    <td>
                        {{ $categoria->tarefas->count() }}
                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="2" class="text-center">
                        Não existem categorias.
                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection