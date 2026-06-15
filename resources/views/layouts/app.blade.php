<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agenda de Tarefas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            min-height: 100vh;
            background: #111827;
        }

        .sidebar a {
            color: #cbd5e1;
            text-decoration: none;
            display: block;
            padding: 12px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .sidebar a:hover {
            background: #1f2937;
            color: white;
            transform: translateX(5px);
        }

        .navbar {
            background: #0f172a;
        }

        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .content {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark px-3">
    <span class="navbar-brand">📋 Agenda de Tarefas</span>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar p-3">
            <h6 class="text-secondary mb-3">Menu</h6>

            <a href="/">🏠 Dashboard</a>
            <a href="/tarefas">📝 Tarefas</a>
            <a href="/categorias">📂 Categorias</a>
            <a href="{{ route('estatisticas') }}">📊 Estatísticas</a>
        </div>

        <!-- Conteúdo -->
        <div class="col-md-10 p-4">
            <div class="content">
                @yield('content')
            </div>
        </div>

    </div>
</div>

</body>
</html>