<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agenda de Tarefas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">
            Agenda de Tarefas
        </span>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-2 bg-dark text-white vh-100 p-3">
            <h5>Menu</h5>

         <ul class="nav flex-column">
             <a href="/" class="nav-link text-white">
             Dashboard
             </a>

            <a href="/tarefas" class="nav-link text-white">
                Tarefas
            </a>

            <a href="/categorias" class="nav-link text-white">
                Categorias
            </a>

            <a href="/estatisticas" class="nav-link text-white">
                Estatísticas
            </a>
          </ul>
        </div>

        <div class="col-md-10 p-4">
            @yield('content')
        </div>

    </div>
</div>

</body>
</html>