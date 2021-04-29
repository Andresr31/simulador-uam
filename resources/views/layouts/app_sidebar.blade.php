<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="d-flex" id="wrapper">
            <div class="border-right bg-white shadow-sm" id="sidebar-wrapper">
                <div class="sidebar-heading align-content-center text-center">
                    <h4>{{ Auth::user()->fullname }}</h4>
                    <a class="nav-link p-0 active exact-active" href="#">
                        Perfil
                    </a>
                </div>

                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action" href="{{ route('home') }}">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <i class="fas fa-home mr-2"></i>
                            <span class="menu-collapsed font-weight-bold">Inicio</span>
                        </div>
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ route('biomedical-equipments.index') }}">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <i class="fas fa-laptop-medical mr-2"></i>
                            <span class="menu-collapsed font-weight-bold">Equipos biomédicos</span>
                        </div>
                    </a>
                    <div class="accordion" id="sidebarAcordion">

                    </div>
                </div>
            </div>
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->fullname }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('home') }}">
                                                {{ __('Home') }}
                                            </a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
