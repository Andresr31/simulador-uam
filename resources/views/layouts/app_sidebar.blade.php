<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/scripts.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
   
    
    
</head>

<body>
    <div id="app">
        <div class="d-flex" id="wrapper">
            <div class="border-right bg-white shadow-sm " id="sidebar-wrapper">
                <div class="sidebar-heading align-content-center text-center">
                    <h6><strong>{{ Auth::user()->fullname }}</strong></h6>
                    <a class="nav-link p-0 active exact-active" href="#">
                        Perfil
                    </a>
                </div>

                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{ route('home') }}">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <i class="fas fa-home mr-2"></i>
                            <span class="menu-collapsed font-weight-bold">Inicio</span>
                        </div>
                    </a>

                    @if (Auth::user()->hasRole('admin'))
                         
                        <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'users.index' || Route::currentRouteName() == 'users.create' || Route::currentRouteName() == 'users.edit' || Route::currentRouteName() == 'users.show' ? 'active' : '' }}" href="{{ route('users.index') }}">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <i class="fas fa-users mr-2"></i>
                                <span class="menu-collapsed font-weight-bold">Usuarios</span>
                            </div>
                        </a>

                        <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'hospital-rooms.index' || Route::currentRouteName() == 'hospital-rooms.create' || Route::currentRouteName() == 'hospital-rooms.edit' || Route::currentRouteName() == 'hospital-rooms.show' ? 'active' : '' }}" href="{{ route('hospital-rooms.index') }}">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <i class="fas fa-person-booth mr-2"></i>
                                <span class="menu-collapsed font-weight-bold">Ambientes hospitalarios</span>
                            </div>
                        </a>

                        <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'biomedical-equipments.index' || Route::currentRouteName() == 'biomedical-equipments.create' || Route::currentRouteName() == 'biomedical-equipments.edit' || Route::currentRouteName() == 'biomedical-equipments.show' ? 'active' : '' }}"
                            href="{{ route('biomedical-equipments.index') }}">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <i class="fas fa-laptop-medical mr-2"></i>
                                <span class="menu-collapsed font-weight-bold">Equipos biomédicos</span>
                            </div>
                        </a>

                        <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'rules.index' || Route::currentRouteName() == 'rules.create' || Route::currentRouteName() == 'rules.edit' || Route::currentRouteName() == 'rules.show' ? 'active' : '' }}"
                            href="{{ route('rules.index') }}">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <i class="fas fa-pencil-ruler mr-2"></i>
                                <span class="menu-collapsed font-weight-bold">Reglas</span>
                            </div>
                        </a>

                        {{-- <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'walls.index' || Route::currentRouteName() == 'walls.create' || Route::currentRouteName() == 'walls.edit' || Route::currentRouteName() == 'walls.show' ? 'active' : '' }}" href="{{ route('walls.index') }}">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <i class="fas fa-border-all mr-2"></i>
                                <span class="menu-collapsed font-weight-bold">Paredes</span>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'floors.index' || Route::currentRouteName() == 'floors.create' || Route::currentRouteName() == 'floors.edit' || Route::currentRouteName() == 'floors.show' ? 'active' : '' }}" href="{{ route('floors.index') }}">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <i class="fas fa-square mr-2"></i>
                                <span class="menu-collapsed font-weight-bold">Pisos</span>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'celling.index' || Route::currentRouteName() == 'celling.create' || Route::currentRouteName() == 'celling.edit' || Route::currentRouteName() == 'celling.show' ? 'active' : '' }}" href="{{ route('celling.index') }}">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <i class="fas fa-home mr-2"></i>
                                <span class="menu-collapsed font-weight-bold">Techos</span>
                            </div>
                        </a> --}}

                    @endif

                    @if (Auth::user()->hasRole('teacher'))
                        <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'rules.index' || Route::currentRouteName() == 'rules.create' || Route::currentRouteName() == 'rules.edit' || Route::currentRouteName() == 'rules.show' ? 'active' : '' }}"
                            href="{{ route('users.index') }}">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <i class="fas fa-users mr-2"></i>
                                <span class="menu-collapsed font-weight-bold">Estudiantes</span>
                            </div>
                        </a>

                        <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'rules.index' || Route::currentRouteName() == 'rules.create' || Route::currentRouteName() == 'rules.edit' || Route::currentRouteName() == 'rules.show' ? 'active' : '' }}"
                            href="{{ route('rules.index') }}">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <i class="fas fa-pencil-ruler mr-2"></i>
                                <span class="menu-collapsed font-weight-bold">Reglas</span>
                            </div>
                        </a>
                        
                    @endif
                    
                    
                    <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'simulations.index' || Route::currentRouteName() == 'simulations.create' || Route::currentRouteName() == 'simulations.edit' || Route::currentRouteName() == 'simulations.show' ? 'active' : '' }}"
                        href="{{ route('simulations.index') }}">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <i class="fas fa-hospital-user mr-2"></i>
                            <span class="menu-collapsed font-weight-bold">Simulaciones</span>
                        </div>
                    </a>

                    <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'simulations.index' || Route::currentRouteName() == 'simulations.create' || Route::currentRouteName() == 'simulations.edit' || Route::currentRouteName() == 'simulations.show' ? 'active' : '' }}"
                        href="{{ route('simulations.index') }}">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <i class="fas fa-book mr-2"></i>
                            <span class="menu-collapsed font-weight-bold">Tarjetas de estudio</span>
                        </div>
                    </a>

                    <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'simulations.index' || Route::currentRouteName() == 'simulations.create' || Route::currentRouteName() == 'simulations.edit' || Route::currentRouteName() == 'simulations.show' ? 'active' : '' }}"
                        href="{{ route('simulations.index') }}">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <i class="fas fa-dice mr-2"></i>
                            <span class="menu-collapsed font-weight-bold">Trivias</span>
                        </div>
                    </a>

                    <div class="accordion" id="sidebarAcordion">

                    </div>
                </div>
            </div>
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-md navbar-dark bg-simulador shadow-sm">
                    <div class="container">
                        <a class="navbar-brand logo d-flex align-items-center" href="{{ url('/') }}">
                            <img src="{{ asset('img/welcome/logo.png') }}">
                            <span>SimuladorUAM</span>
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

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@9.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('#biomedicalEquipment').select2();

            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            /* - - -*/
            @if (session('message'))
                Swal.fire({
                title: 'Felicitaciones',
                text: '{{ session('message') }}',
                icon: 'success',
                confirmButtonColor: '#1e5f74',
                confirmButtonText: 'Aceptar'
                });
            @endif

            @if (session('message_error'))
                Swal.fire({
                title: 'Error',
                text: '{{ session('message_error') }}',
                icon: 'error',
                confirmButtonColor: '#E10404',
                confirmButtonText: 'Aceptar'
                });
            @endif
            /* - - -*/
            @if (session('error'))
                Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Acceso Denegado',
                text: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 2500
                });
            @endif

            $('.btn-delete').click(function(event) {
                Swal.fire({
                    title: 'Esta usted seguro?',
                    text: 'Desea eliminar este registro',
                    icon: 'error',
                    showCancelButton: true,
                    cancelButtonColor: '#d0211c',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#1e5f74',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {

                    if (result.value) {
                        $(this).parent().submit();
                    }
                });
            });

        });

    </script>

</body>

</html>
