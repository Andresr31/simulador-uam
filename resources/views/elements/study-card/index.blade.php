@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2 ml-auto" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Tarjetas de estudio</h3>
            <hr />
            @if (count($studyCards) >0)
                <div>
                    <div class="card bg-white rounded">
                        <div class="card-body row col-12">
                            @foreach ($studyCards as $studyCard)
                                <div class="col-md-4 mt-2">
                                    <div class="card">
                                        <img src="{{ asset($studyCard->image) }}" width="200px" class="my-2 img-top-card">
                                        <div class="card-body">
                                            <p class="text-center">{{$studyCard->summary}}</p>
                                            <a href="{{ route('studyCards.show',$studyCard) }}" class="btn btn-block btn-simulador">
                                                <i class="fa fa-clinic-medical"></i>
                                                {{$studyCard->title}}
                                            </a>
                                            @if (Auth::user()->hasRole('teacher') || Auth::user()->hasRole('admin'))
                                                <div class="row justify-content-center my-1">
                                                    <a href="{{ route('studyCards.edit',$studyCard) }}" class="btn">
                                                        <i class="fa fa-pen fa-sm"></i>
                                                    </a>
                                                    <form action="{{route('studyCards.destroy',$studyCard)}}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <a  class="btn btn-link d-inline p-0 mr-2 text-decoration-none btn-delete">
                                                            <i class="fa fa-trash-alt btn"></i>
                                                        </a>
                                                    </form>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
            @else
            <div class="alert alert-warning" role="alert">
                Aún no hay Tarjetas de estudio
              </div> 
            @endif
            
        </div>
    </main>
@endsection

@if (Auth::user()->hasRole('teacher') || Auth::user()->hasRole('admin'))                                         
    <a class="float btn btn-primary rounded-pill float-right" href="{{ route('studyCards.create') }}"
        role="button" data-toggle="tooltip" data-placement="top" title="Crear equipo Tarjeta de estudio">
        <i class="fas fa-plus my-float"></i>
    </a>
@endif
