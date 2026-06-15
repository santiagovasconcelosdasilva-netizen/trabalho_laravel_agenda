@extends('layouts.app')

@section('content')

<h1 class="mb-4">Editar Tarefa</h1>

<form action="{{ route('tarefas.update', $tarefa->id) }}"
      method="POST">

```
@csrf
@method('PUT')

<div class="mb-3">
    <label class="form-label">Título</label>

    <input
        type="text"
        name="tarefa"
        value="{{ $tarefa->tarefa }}"
        class="form-control"
        required>
</div>

<div class="mb-3">
    <label class="form-label">Descrição</label>

    <textarea
        name="descricao"
        rows="4"
        class="form-control">{{ $tarefa->descricao }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Categoria</label>

    <select
        name="categoria_id"
        class="form-select">

        @foreach($categorias as $categoria)

            <option
                value="{{ $categoria->id }}"
                {{ $categoria->id == $tarefa->categoria_id ? 'selected' : '' }}>

                {{ $categoria->nomeCategoria }}

            </option>

        @endforeach

    </select>
</div>

<div class="mb-3">
    <label class="form-label">Estado</label>

    <select
        name="estado"
        class="form-select">

        <option value="Por Iniciar"
            {{ $tarefa->estado == 'Por Iniciar' ? 'selected' : '' }}>
            Por Iniciar
        </option>

        <option value="Em Curso"
            {{ $tarefa->estado == 'Em Curso' ? 'selected' : '' }}>
            Em Curso
        </option>

        <option value="Concluída"
            {{ $tarefa->estado == 'Concluída' ? 'selected' : '' }}>
            Concluída
        </option>

    </select>
</div>

<button type="submit"
        class="btn btn-primary">
    Atualizar
</button>

<a href="{{ route('tarefas.index') }}"
   class="btn btn-secondary">
    Cancelar
</a>
```

</form>

@endsection
