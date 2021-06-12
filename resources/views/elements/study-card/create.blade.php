@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
                <h3 class="d-inline align-middle">Crear Tarjeta de estudio</h3>
            <hr />

            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-7 col-md-8">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header text-center"> <h5>Información de la tarjeta de estudio</h5></div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('studyCards.store') }}"enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="owner_id" value="{{Auth::user()->id}}">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="title">Titulo</label>
                                                <input id="title" type="text"
                                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                                    value="{{ old('title') }}" placeholder="Titulo" 
                                                    required autofocus />

                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="summary">Resumen</label>
                                                <input id="summary" type="text"
                                                    class="form-control @error('summary') is-invalid @enderror" name="summary"
                                                    value="{{ old('summary') }}" placeholder="Resumen"
                                                    required autofocus />

                                                @error('summary')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="content">Contenido</label>
                                                <textarea class="form-control @error('content') is-invalid @enderror"
                                                    id="content" rows="3" name="content" placeholder="Contenido"
                                                    required>{{ old('content') }}</textarea>

                                                @error('content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="image">Imagen</label>
                                                <div class="custom-file">
                                                    <input type="file" name="image"
                                                        class="custom-file-input form-control @error('image') is-invalid @enderror"
                                                        id="image" accept="image/*">
                                                    <label class="custom-file-label" for="image">Seleccionar imagen</label>
                                                    @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="mt-3 img-preview">
                                                    <img src="#" id="preview" class="img-thumbnail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    <p class="d-inline">Crear</p>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
