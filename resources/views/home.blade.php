@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid bg-light" >
        <!-- Page Content -->
        <div class="my-3 bg-light" style="background-color: white">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle" onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Inicio</h3>
            <hr />

            <div class="container">
                <p>
                    Bienvenidos al <strong>SimuladorUAM</strong> diseñado por la Universidad Autónoma de Manizales 
                    en el semillero de Ingenieria de software con el fin de permitirle a los estudiantes conocer los
                    diferentes ambientes hospitalarios y sus equipos biomédicos, actualmente contamos con los siguientes ambientes:
                      
                </p>
                
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12">
                    {{-- <h3> <i class="fas fa-tag"></i> Acciones</h3>
                    <hr> --}}
                    <div class="owl-carousel owl-theme">

                        @foreach ($rooms as $room)
                            <div class="slider" style="background-image: url({{asset($room->image)}})">
                                <p class="text-center">
                                    <strong class="pb-2">{{$room->name}}</strong><br>
                                    {{$room->description}}
                                </p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="justify-content-center text-center ">
                <img src="{{ asset('img/elements/logo_uam.png') }}"><br>
                <small class="my-3">&copy; Copyright <strong><span>UAM</span></strong>. All Rights Reserved</small> - <small>Diseñada por <strong> Semillero de Ingeniería de Software</strong></small>
            </div>
            
        </div>
    </main>
@endsection
