@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Gestão de Tarefas</h1>

        <a href="{{ route('tarefas.create') }}"
           class="btn btn-success">
            + Nova Tarefa
        </a>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">

            <div class="row">

                <div class="col-md-8">
                    <input type="text"
                           class="form-control"
                           placeholder="Pesquisar tarefa...">
                </div>

                <div class="col-md-4">
                    <select class="form-select">
                        <option>Todas</option>
                        <option>Por Iniciar</option>
                        <option>Em Curso</option>
                        <option>Concluída</option>
                    </select>
                </div>

            </div>

        </div>
    </div>

    <div class="card shadow-sm">

        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Tarefa</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                        <th width="220">Ações</th>
                    </tr>

                </thead>

                <tbody>

                @forelse($tarefas as $tarefa)

                    <tr>

                        <td>{{ $tarefa->id }}</td>

                        <td>{{ $tarefa->tarefa }}</td>

                        <td>{{ $tarefa->categoria_id }}</td>

                        <td>

                            @if($tarefa->estado == 'Por Iniciar')
                                <span class="badge bg-secondary">
                                    Por Iniciar
                                </span>
                            @endif

                            @if($tarefa->estado == 'Em Curso')
                                <span class="badge bg-warning text-dark">
                                    Em Curso
                                </span>
                            @endif

                            @if($tarefa->estado == 'Concluída')
                                <span class="badge bg-success">
                                    Concluída
                                </span>
                            @endif

                        </td>

                        <td>

                         <a href="{{ route('tarefas.show', $tarefa->id) }}"
                                     class="btn btn-info btn-sm">
                                      Ver
                         </a>

                            <a href="{{ route('tarefas.edit', $tarefa->id) }}"
                                       class="btn btn-warning btn-sm">
                                      Editar
                            </a>

                            <form action="{{ route('tarefas.destroy', $tarefa->id) }}"
                                 method="POST" style="display:inline;">

                                   @csrf
                                   @method('DELETE')

                                    <button
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Tem a certeza?')">

                                       Eliminar

                                    </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="5"
                            class="text-center p-4">

                            Nenhuma tarefa encontrada.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection