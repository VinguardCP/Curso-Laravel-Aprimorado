<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .masonry {
            column-count: 3;
            column-gap: 20px;
            margin-top: 10px;
        }

        .section {
            margin-bottom: 20px;
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 5px;
        }

        @media (max-width: 992px) {
            .masonry {
                column-count: 2;
            }
        }

        @media (max-width: 600px) {
            .masonry {
                column-count: 1;
            }
        }

        /* mantém seus ajustes */
        .card {
            display: inline-block;
            width: 100%;
        }

        .card-image img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-title {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-content p {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .row {
            margin-top: 20px;
        }

        img {
            border-radius: 15px;
        }
    </style>
</head>

<body>

    <!-- Dropdown Structure 1 -->
    <ul id='dropdown1' class='dropdown-content'>
        @foreach ($categoriasMenu as $categoriaM)
            <li><a href="{{ route('categoria', $categoriaM->id) }}">{{ $categoriaM->nome }}</a></li>
        @endforeach
    </ul>

    <!-- Dropdown Structure 2 -->
    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('login.logout') }}">Sair<i class="material-icons right">logout</i></a></li>
    </ul>

    <nav class="red">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo center">Curso Laravel</a>
            <ul id="nav-mobile" class="left">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="" class="dropdown-trigger" data-target='dropdown1'>Categorias <i
                            class="material-icons right">expand_more</i></a></li>
                <li><a href="{{ route('carrinho') }}">Carrinho <span class="new badge blue" data-badge-caption="">
                            {{ count(session('carrinho', [])) }} </span></a></li>
            </ul>
            @auth
                <ul id="nav-mobile" class="right">
                <li><a href="" class="dropdown-trigger" data-target='dropdown2'>Olá {{auth()->user()->firstName}} <i class="material-icons right">expand_more</i></a> </li>
                </ul>
            @else
                <ul id="nav-mobile" class="right">
                <li><a href="{{route('login')}}">Login<i class="material-icons right">login</i></a> </li>
                </ul>
            @endauth
        </div>
    </nav>

    @yield('conteudo')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        var elemDrop = document.querySelectorAll('.dropdown-trigger');
        var instanceDrop = M.Dropdown.init(elemDrop, {
            coverTrigger: false,
            constrainWidth: false
        });
    </script>
</body>

</html>
