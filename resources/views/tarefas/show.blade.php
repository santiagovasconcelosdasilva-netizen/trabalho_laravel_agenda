@extends('layouts.app')

@section('content')

<h1>{{ $tarefa->tarefa }}</h1>

<div class="card">

    <div class="card-body">

        <p>
            <strong>Descrição:</strong>
            {{ $tarefa->descricao }}
        </p>

        <p>
            <strong>Estado:</strong>
            {{ $tarefa->estado }}
        </p>

        <p>
            <strong>ID:</strong>
            {{ $tarefa->id }}
        </p>

    </div>

</div>

@endsection