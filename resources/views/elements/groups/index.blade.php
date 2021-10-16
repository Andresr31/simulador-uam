@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Grupos</h3>
            <hr />
            @if (count($groups) >0)
            <div>
                <div class="card bg-white rounded">
                    <div class="card-body row col-12">
                        @foreach ($groups as $group)
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><strong>{{$group->name}}</strong></h5><br>
                                        <p class="card-text">
                                            <strong>Docente: </strong>{{$group->main_teacher()->fullname}} <br>
                                            @if($group->assistant_teacher())
                                                <small><strong>Monitor: </strong>{{$group->assistant_teacher()->fullname}}</small><br>
                                                <small><strong>Código: </strong>{{$group->code}}</small>
                                            @else
                                                <small><strong>Monitor: </strong>No registrado</small><br>
                                                <small class="pb-3"><strong>Código: </strong>{{$group->code}}</small>
                                            @endif                                            
                                        </p>
                                       
                                        <a href="{{route('groups.show',$group)}}" class="btn btn-block btn-primary">Ver</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="alert alert-warning" role="alert">
                Aún no hay Grupos creados
            </div> 
        @endif
    </main>
@endsection

@if (Auth::user()->hasRole('admin'))                                         
    <a class="float btn btn-primary rounded-pill float-right" href="{{ route('groups.create') }}"
        role="button" data-toggle="tooltip" data-placement="top" title="Crear grupo">
        <i class="fas fa-plus my-float"></i>
    </a>
@endif

