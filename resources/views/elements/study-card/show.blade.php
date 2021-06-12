@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Ver Tarjeta de estudio</h3>
            <hr />

            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-7 col-md-8">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header text-center"> <h5>Información de la tarjeta de estudio</h5></div>
                                <div class="card-body">
                                    <div class="card-body text-center">
                                        <h6 class="card-subtitle font-weight-bold">Titulo</h6>
                                        <p class="card-text ml-2 mb-3">{{ $studyCard->title }}</p>
                                        <h6 class="card-subtitle font-weight-bold">Resumen</h6>
                                        <p class="card-text ml-2 mb-3">{{ $studyCard->summary }}</p>
                                        <h6 class="card-subtitle font-weight-bold">Contenido</h6>
                                        <p class="card-text ml-2 mb-3">{{ $studyCard->content }}</p>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="mt-3 img-preview justify-content-center">
                                                    <img src="{{ asset($studyCard->image) }}" id="preview"
                                                        class="img-thumbnail" width="300px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="{{route('studyCards.index')}}" class="btn btn-primary btn-block">
                                                <p class="d-inline">Atras</p>
                                            </a>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
