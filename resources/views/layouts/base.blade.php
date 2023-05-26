<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{--    @vite(['resources/scss/app.scss', 'resources/js/app.js'])--}}
    <link rel="stylesheet" type="text/css" href="https://pgn.chessbase.com/CBReplay.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/assets/css/styles.css')}}">
</head>
<body>
<div class="container bg_screen">
    <header class="header-responsive">
        <nav class="navbar bg-body-tertiary navbar-dark bg-gradient dark-brown">
            <div class="container-fluid">
                <a class="navbar-brand ms-4" href="{{ route('index') }}"><h1>Шахматный справочник</h1></a>
                <div class="navbar ms-3">
                        @guest
                            @if (Route::has('login'))
                                <div class="navbar-nav">
                                    <a class="nav-link active" aria-current="page"
                                       href="{{ route ('login') }}">Вход</a>
                                </div>
                            @endif
                            @if (Route::has('register'))
                                <div class="navbar-nav ms-5">
                                    <a class="nav-link active" aria-current="page"
                                       href="{{ route('register') }}">Регистрация</a>
                                </div>
                            @endif

                        @else
                            <li class="nav-item">
                                <a
                                    id="navbarDropdown"
                                    class="nav-link active"
                                    href="#" role="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    aria-current="page"
                                    href="{{route ('logout')}}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Выход
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <img src="{{asset('/assets/img/header.jpg')}}" alt="Header" style="width: 100%">
        <nav class="navbar  navbar-dark bg-gradient brown">
            <div class="container-fluid">
{{--                <a class="navbar-brand" href="{{route ('index')}}">Главная</a>--}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                СПОРТ
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route ('devpage')}}">Матчи</a></li>
                                <li><a class="dropdown-item" href="{{route ('devpage')}}">Турниры</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                НАУКА
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route ('devpage')}}">Психология</a></li>
                                <li><a class="dropdown-item" href="{{route ('notation')}}">Нотация</a></li>
                                <li><a class="dropdown-item" href="{{route ('rules')}}">Правила игры</a></li>
                                <li><a class="dropdown-item" href="#">Словарь терминов</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                ИСКУССТВО
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route ('history')}}">История шахмат</a></li>
                                <li><a class="dropdown-item" href="{{route ('devpage')}}">Композиция</a></li>
                            </ul>
                        </li>

                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Поиск на сайте"
                                       aria-label="Search">
                                <button class="btn btn-outline-light" type="submit">Искать</button>
                            </form>
                        </li>
                        {{--@guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                       href="{{ route ('login') }}">Вход</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                       href="{{ route('register') }}">Регистрация</a>
                                </li>
                            @endif

                        @else
                            <li class="nav-item">
                                <a
                                    id="navbarDropdown"
                                    class="nav-link active"
                                    href="#" role="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    aria-current="page"
                                    href="{{route ('logout')}}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Выход
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest--}}

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('main')
    <footer class="footer mt-auto py-3 bg-gradient brown">
        <div class="container">
            <span class="text-muted">2021 @ Chessmanual</span>
        </div>
    </footer>
</div>
<script src="https://pgn.chessbase.com/jquery-3.0.0.min.js"></script>
<script src="https://pgn.chessbase.com/cbreplay.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>

