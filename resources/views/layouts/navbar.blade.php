<nav class="navbar navbar-expand-md navbar-dark bg-simulador shadow-sm">
    <div class="container">
        <a class="navbar-brand logo d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('img/welcome/logo.png') }}"> 
            <span>SimuladorUAM</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('home') }}">
                            <i class="fa fa-clipboard-list"></i> 
                            @lang('general.link-dashboard')
                        </a>
                    </li>
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                 <!-- Authentication Links -->
                @guest
                @php $locale = session()->get('locale'); @endphp
                
                    <li class="nav-item d-none d-sm-block"><span class="nav-link">|</span></li>
               
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fa fa-user-lock"></i> 
                            Iniciar sesión
                        </a>
                    </li>
                    <li class="nav-item d-none d-sm-block"><span class="nav-link">|</span></li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="fa fa-user-edit"></i> 
                                Registrarse
                            </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ asset(Auth::user()->photo) }}" class="img-thumbnail rounded-circle" width="40px">
                            {{ Auth::user()->fullname }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->role == "Admin")
                                <a class="dropdown-item" href="{{ url('users') }}">
                                    <i class="fa fa-users"></i>
                                     Módulo Usuarios 
                                </a>
                                <a class="dropdown-item" href="{{ url('categories') }}">
                                    <i class="fas fa-list-alt"></i>
                                     Módulo Categorías 
                                </a>
                                <a class="dropdown-item" href="{{ url('games') }}">
                                    <i class="fas fa-gamepad"></i>
                                     Módulo Juegos 
                                </a>
                                <div class="dropdown-divider"></div>
                            @elseif(Auth::user()->role == "Editor")
                                <a class="dropdown-item" href="{{ url('editor/info') }}">
                                        <i class="fa fa-user"></i>
                                         Mis Datos 
                                </a>
                                <a class="dropdown-item" href="{{ url('editor/games') }}">
                                    <i class="fas fa-gamepad"></i>
                                     Mis Juegos 
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fa fa-times"></i> 
                                @lang('general.link-close')
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>