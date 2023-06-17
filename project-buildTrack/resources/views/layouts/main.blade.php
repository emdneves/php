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
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">




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
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show_all_tasks') }}">EXPLORE</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('all_categories') }}">CATEGORIES</a>
                    </li>

                    {{--  --------------------ITEMS NAVBAR PARA ADMINISTRADOR-------------------- --}}

                    {{--                     <li class="nav-item">
                        @if (session('status'))
                        <a class="nav-link" href="{{ route('show_all_users') }}">MANAGE USERS</a>
                        {{ session('status') }}
                        @endif
                    </li>
                    <li class="nav-item">
                        @if (session('status'))
                        <a class="nav-link" href="{{ route('add_user') }}">NEW USER</a>
                        {{ session('status') }}
                        @endif
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show_all_users') }}">MANAGE USERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add_user') }}">NEW USER</a>
                    </li>

                    {{--  --------------------ITEMS NAVBAR PARA USER AUTENTICADO-------------------- --}}


                    {{--                    <li class="nav-item">
                        @if (session('status'))
                        <a class="nav-link" href="{{ route('add_task') }}">NEW ITEM</a>
                        {{ session('status') }}
                        @endif
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add_task') }}">NEW ITEM</a>
                    </li>
                </ul>
                <ul class="navbar-nav">



                    {{-- --------------------SISTEMA DE SIGN UP / SIGN IN-------------------- --}}´

<li class="nav-item">
    @if (session('status'))
        <a class="nav-link" href="{{ route('login') }}">SIGN IN</a>
        {{ session('status') }}
    @else
        <a class="nav-link" href="{{ route('account') }}">ACCOUNT</a>
    @ @endif
</li>
<li class="nav-item">
    @if (session('status'))
        <a class="nav-link" href="{{ route('register') }}">SIGN UP</a>
        {{ session('status') }}
    @else
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="nav-link" type="submit">LOGOUT</button>
        </form>
    @endif
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
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center">
                <h2>contact us</h2>
                <p>have questions or need support? get in touch with our team.</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="btn btn-social-icon btn-twitter"><i
                                class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-social-icon btn-facebook"><i
                                class="fab fa-facebook"></i></a></li>
                </ul>
                <p>mail: emanuel.rodrigues.prt_a@msft.cesae.pt</p>
                <p>phone: +911111111</p>
            </div>
        </div>
    </footer>


</body>

</html>
