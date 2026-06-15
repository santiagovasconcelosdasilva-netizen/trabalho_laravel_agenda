@extends('layouts.app')

@section('content')

<h1>Dashboard</h1>

<div class="row">

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                Total de Tarefas
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                Por Iniciar
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                Em Curso
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                Concluídas
            </div>
        </div>
    </div>

</div>

@endsection