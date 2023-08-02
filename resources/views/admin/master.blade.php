<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body class="container text-center">

<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('main') }}">POLYGONERDS-ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.main.page') }}">MAIN</a>
{{--                            <a class="dropdown-item" href="{{ route('admin.artists.page') }}">ARTISTS</a>--}}
                            <a class="dropdown-item" href="{{ route('admin.about.page') }}">ABOUT</a>
                            <a class="dropdown-item" href="{{ route('admin.recruit.page') }}">RECRUIT</a>
                            <a class="dropdown-item" href="{{ route('admin.contact.page') }}">CONTACT</a>
                            <a class="dropdown-item" href="{{ route('admin.video.page') }}">VIDEO</a>
                            <a class="dropdown-item" href="{{ route('admin.works.page') }}">WORK</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('menu.en.settings') }}">EN</a>
                            <a class="dropdown-item" href="{{ route('menu.ua.settings') }}">UA</a>
                            <a class="dropdown-item" href="{{ route('menu.ru.settings') }}">RU</a>
                            <a class="dropdown-item" href="{{ route('menu.de.settings') }}">DE</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('software.index') }}">Software</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('artists.index') }}">Artists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('works.index') }}">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('positions.index') }}">Positions</a>
                    </li>
                    @auth()
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin') }}">Admin</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>

<main role="main">
    @yield('content')
</main>

<footer class="container">
    <p>PolygoNerds &copy; 2021 Ukraine</p>
</footer>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script>
    document.querySelector("#video_mp4").onchange = function(){
        document.querySelector("#file_name_mp4").textContent = this.files[0].name;
    }

    document.querySelector("#video_webm").onchange = function(){
        document.querySelector("#file_name_webm").textContent = this.files[0].name;
    }

    document.querySelector("#bg_image_jpg").onchange = function(){
        document.querySelector("#file_name_jpg").textContent = this.files[0].name;
    }
</script>
</body>
</html>
