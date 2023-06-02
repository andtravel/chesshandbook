<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://pgn.chessbase.com/CBReplay.css">
    <link rel="stylesheet" href="{{asset('/assets/admin/fonts/all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/assets/css/styles.css')}}">
</head>
<body>
<div class="container bg_screen">
    <header class="header-responsive">
        <nav class="navbar bg-body-tertiary navbar-dark bg-gradient dark-brown text-custom-light">
            <div class="container-fluid">
                <a class="navbar-brand ms-4" href="{{ route('index') }}"><h1 class="text-custom-light">Шахматный справочник</h1></a>
                <div class="navbar ms-3">
                    {{--<form class="d-flex"  role="search">
                        <input class="form-control color-custom-light" type="search" placeholder="Поиск на сайте"
                               aria-label="Search">
                        <button class="btn btn-outline-light brown" type="submit">Искать</button>
                    </form>--}}
                        @guest
                            @if (Route::has('register'))
                                <div class="navbar-nav">
                                    <a class="btn btn-outline-light dark-brown" aria-current="page"
                                       href="{{ route ('register') }}">Регистрация</a>
                                </div>
                            @endif
                            @if (Route::has('login'))
                                <div class="navbar-nav ms-5">
                                    <a class="nav-link text-custom-light" aria-current="page"
                                       href="{{ route('login') }}">Личный кабинет</a>
                                </div>
                            @endif

                        @else
                            <div class="navbar-nav">
                                <a class="nav-link text-custom-light" aria-current="page" href="#">
                                    {{ Auth::user()->name }}
                                </a>
                            </div>
                            <div class="navbar-nav ms-5">
                                <a
                                    class="btn btn-outline-light"
                                    aria-current="page"
                                    href="{{route ('logout')}}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Выход
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-start brown " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Шахматный справочник</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route ('openings')}}">ДЕБЮТ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route ('middlegame')}}">МИТТЕЛЬШПИЛЬ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route ('endgame')}}">ЭНДШПИЛЬ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    СПОРТ
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-dark dark-brown" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route ('devpage')}}">Матчи</a></li>
                                    <li><a class="dropdown-item" href="{{route ('devpage')}}">Турниры</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    НАУКА
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-dark dark-brown" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route ('devpage')}}">Психология</a></li>
                                    <li><a class="dropdown-item" href="{{route ('notation')}}">Нотация</a></li>
                                    <li><a class="dropdown-item" href="{{route ('rules')}}">Правила игры</a></li>
                                    <li><a class="dropdown-item" href="#">Словарь терминов</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                   aria-expanded="false" data-bs-toggle="dropdown">
                                    ИСКУССТВО
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark dark-brown" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route ('history')}}">История шахмат</a></li>
                                    <li><a class="dropdown-item" href="{{route ('devpage')}}">Композиция</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
        <img src="{{asset('/assets/img/header.jpg')}}" alt="Header" style="width: 100%">
    </header>
    <main>
        @yield('main')
    </main>
    <footer class="footer mt-auto py-3 bg-gradient dark-brown">
        <div class="container">
            <span class="text-muted">{{ date('Y') }}@Шахматный справочник</span>
        </div>
    </footer>
</div>
<script src="https://pgn.chessbase.com/jquery-3.0.0.min.js"></script>
<script src="https://pgn.chessbase.com/cbreplay.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
</body>
</html>

