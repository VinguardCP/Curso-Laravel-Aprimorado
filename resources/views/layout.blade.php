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
</style>
</head>
<body>
    <nav class="red">
        <div class="nav-wrapper container">
        <a href="#" class="brand-logo center">Curso Laravel</a>
        <ul id="nav-mobile" class="left">
            <li><a href="">Home</a></li>
            <li><a href="">Carrinho</a></li>
        </ul>
        </div>
    </nav>

    @yield('conteudo')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>