@extends('layouts.app')

@section('content')

<h1 class="mb-4">Dashboard</h1>

<div class="row">

    <div class="col-md-3">
        <div class="card shadow text-center">
            <div class="card-body">
                <h5>Total de Tarefas</h5>
                <h2>{{ $total }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow text-center">
            <div class="card-body">
                <h5>Por Iniciar</h5>
                <h2>{{ $porIniciar }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow text-center">
            <div class="card-body">
                <h5>Em Curso</h5>
                <h2>{{ $emCurso }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow text-center">
            <div class="card-body">
                <h5>Concluídas</h5>
                <h2>{{ $concluidas }}</h2>
            </div>
        </div>
    </div>

</div>

@endsection