<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">



    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
    </script>
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BUILDTRACK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show_all_users') }}">Todos os utilizadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show_all_tasks') }}">Todas as Tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add_user') }}">Adicionar Utilizador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add_task') }}">Adicionar tarefa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1> {{-- Início Ficheiro --}}
    </h1>

    @yield('content')

    <h1>{{-- Fim Ficheiro --}}
    </h1>

    @yield('endcontent')

    <footer>
       {{-- Footer --}}
    </footer>
</body>

</html>
