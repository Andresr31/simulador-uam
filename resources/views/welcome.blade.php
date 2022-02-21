<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons  -->
    <link href="{{ asset('img/welcome/logo.png') }}" rel="icon">
    <link href="{{ asset('img/welcome/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <link href=" {{ asset('css/welcome/style.css') }}" rel="stylesheet">
</head>

<body>
    <header id="header" class="header fixed-top">
        <div class="container container-xl d-flex align-items-center justify-content-between">

            <a href="#hero" class="logo d-flex align-items-center">
                <img src="{{ asset('img/welcome/logo.png') }}" alt="">
                <span>SimuladorUAM</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active mr-auto ml-auto" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">Descripción</a></li>
                    <li><a class="nav-link scrollto" href="#features">Características</a></li>
                    <li><a class="nav-link scrollto" href="#guiaUso">Guía del simulador</a></li>
                    <li><a class="nav-link scrollto" href="#descargas">Descargas</a></li>
                    @guest
                        <li><a class="nav-link scrollto" href="{{ route('login') }}">Iniciar sesión</a></li>
                        <li><a class="getstarted scrollto" href="{{ route('register') }}">Registrarse</a></li>
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
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Simulador hospitalario UAM</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Herramienta interactiva creada por la Universidad
                        Autónoma de Manizales</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{route('register')}}"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>@if(Auth::user()) Inicio @else Registrarse @endif</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/welcome/logo.svg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>

    <main id="main">
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>¿De que va el simulador?</h3>
                            <h2>Información sobre el simulador.</h2>
                            <p>
                                El simulador de ambientes hospitalarios de la UAM pretende ser un apoyo a la falta de la posibilidad de visitar dichos ambientes
                                para los estudiantes de ingenieria biomedia de la universidad.
                                El simulador consta de una aplicación de escritorio desarrollada con el motor Unity3d en la cual los estudiantes pueden iniciar simulaciones
                                en 3 ambientes distintos entre los que se encuentran quirofano, urgencias y hospitalización, cada uno tiene una serie de equipos medicos y biomedicos
                                minimos que deberia poseer cada ambiente, unos obligatorios y otros opcionales, con lo cual el usuario que realice la simulación deberá ubicar los equipos
                                correspondientes al ambiente elegido.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Más sobre el simulador</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/welcome/descripcion.jpg') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section>

        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Características</h2>
                    <p>Componentes del simulador</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('img/welcome/herramientas.svg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Aprendizaje virtual</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Distintos ambientes</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Equipos categorizados según función</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Evaluación final a la simulación sobre los equipos ubicados</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Configuración inicial del ambiente, el cual es evaluable a su vez</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>fidelidad ante la realidad en los diversos ambientes</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="guiaUso" class="about">
            
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                            <h2>Guía</h2>
                            <p>Uso general del simulador</p>
                </header>
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <p>
                                Es la primera pantalla que verá el usuario dentro de la aplicación de escritorio, es imperativo haberse creado un usuario en esta misma página web,
                                en esta pantalla se tiene acceso a algunas opciones de la aplicación, el Login consta del correo del usuario y su contraseña
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/welcome/Login.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

             <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <p>
                                Una vez habiendo iniciado sesión con exito, el usuario pasa a la pantalla del menú principal, aquí hay diversas opciones, desde disposición de
                                documentos para repaso (además de poder usar esta página web para dicho fin), pasando por las mismas opciones disponibles desde el Login, y los creditos
                                para los desarrolladores y la institución, su área principal viene dada por la disponibilidad de los 3 ambientes disponibles para los usuarios, diferentes
                                entre su estructura cada uno.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/welcome/MenuPrincipal.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

             <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <p>
                                Cuando se seleciona algún ambiente a simular, ya sea hospitalización, quirofano o urgencias se pasa directamente a la Configuración inicial donde el usuario
                                podrá elegir el tipo de techo, de pared y de piso, y también si ha de tener o no media caña dicho ambiente, esta ultima viendose reflejado dentro del ambiente.
                                Se tiene que elegir con cuidado, puesto que cada ambiente tiene un tipo determinado de techo, piso y pared correcto además del requerimiento o no de la media caña.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/welcome/ConfiguraciónInicial.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

             <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <p>
                                El simulador busca tener cierta fidelidad respecto a los ambientes hospitalarios, llena de objetos los cuales se pueden divisar en dichos ambientes, con sus diversas salas
                                e incluso algún auxiliar médico rondando el área.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/welcome/Simulacion1.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <p>
                                Dentro del simulador el usuario tendrá la capacidad de desplegar un menú flotante en el cual podrá divisar los diversos equipos médicos y biomédicos que deberá ubicar dentro de la sala principal
                                estos están divididos en categorías para su fácil acceso, el usuario también tiene la opción de modificar la ubicación de cualquier equipo que haya colocado así como eliminar dicho equipo, en el menú
                                el jugador puede ver las descripciones de los equipos.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/welcome/Simulacion2.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <p>
                                El usuario puede manipular los equipos casi a gusto, pudiendo hacerlos rotar sobre su eje, colocarlos en cualquier sitio, y mientrás tenga activa la modificación de ubicación de algún objeto el usuario
                                podrá divisar en la esquina inferior izquierda una serie de datos sobre la ubicación de dicho objeto respecto a las paredes de la sala principal.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/welcome/Simulacion3.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <p>
                                Cuando el usuario crea pertinente acabar la simulación, podrá dar por terminada mediante el menú desplegable mencionado anteriormente, hecho esto se pasará a la evaluación final, la cual dependerá enteramente sobre los
                                equipos que el usuario haya usado dentro de la simulación en la cual el usuario deberá responder sobre el nivel de riesgo de cada equipo.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('img/welcome/EvaluacionFinal.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section>


        <section id="descargas" class="features">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Descargas</h2>
                    <p>Descargas del simulador</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('img/welcome/hero-img.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <a href="https://drive.google.com/drive/folders/1kjDZ_LZD6EoAvoxUrJu4U3RTznIhJYiC?usp=sharing" target="_blank" rel="noopener noreferrer"><i class="bi bi-arrow-right"></i></a>
                                    <h3 href="#"
                                        class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Aplicación de escritorio windows</span>
                                    </h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <a href="https://drive.google.com/drive/folders/1k54FojXEFvAWFdOUVWCez7OqnjYn7Ird?usp=sharing" target="_blank" rel="noopener noreferrer"><i class="bi bi-arrow-right"></i></a>
                                    <h3 href="#"
                                        class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Guia de usuario sobre los ambientes</span>
                                    </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="container text-center">
        <div class="credits mr-auto d-inline">
            Contacto Autores:
        </div>
    </div>
    <div class="container text-center">
        <div class="credits mr-auto d-inline">
            Mariano Andrés Medina Duque: mariano.medinad@gmail.com
        </div>
    </div>
    <div class="container text-center">
        <div class="credits mr-auto d-inline">
            Cristian Castrillón Arias: cristian.castrillon@autonoma.edu.co
        </div>
    </div>
    <div class="container text-center">
        <div class="credits mr-auto d-inline">
            Carolina Márquez Narvaez: carolina.marquezn@autonoma.edu.co
        </div>
    </div>
    <div class="container text-center">
        <div class="credits mr-auto d-inline">
            Jorge Iván Meza Martínez: jimezam@autonoma.edu.co
        </div>
    </div>
    <div class="container text-center">
        <div class="credits mr-auto d-inline">
            Santiago Murillo Rendón: smurillo@autonoma.edu.co
        </div>
    </div>
    <div class="container text-center">
        <div class="credits mr-auto d-inline">
            Laura Rocio Giraldo Torres: laura.giraldot@autonoma.edu.co
        </div>
    </div>

    <div class="container text-center py-4">
        <div class="copyright d-inline ml-auto">
            &copy; Copyright <strong><span>UAM</span></strong>. All Rights Reserved   -    
        </div>
        <div class="credits mr-auto d-inline">
            Diseñada por Semillero de Ingeniería de Software
        </div>

    </div>
    
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/welcome/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
