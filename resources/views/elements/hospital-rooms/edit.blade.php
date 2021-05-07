@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Editar ambiente</h3>
            <hr />

            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-7 col-md-8">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header text-center">
                                    <h5>Información del ambiente</h5>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('hospital-rooms.update', $hospitalRoom) }}"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="name">Nombre</label>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name', $hospitalRoom->name) }}" placeholder="Nombre"
                                                    autocomplete="Nombre" required autofocus />

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="description">Descripción</label>
                                                <textarea class="form-control @error('description') is-invalid @enderror"
                                                    id="description" rows="3" name="description" placeholder="Descripción"
                                                    required>{{ old('description', $hospitalRoom->description) }}</textarea>

                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="mesh">Malla</label>
                                                <select id="mesh" class="form-control @error('mesh') is-invalid @enderror"
                                                    name="mesh" value="{{ old('mesh', $hospitalRoom->mesh) }}" required>
                                                    <option {{ $hospitalRoom->mesh == 1 ? 'selected' : '' }} value="1">
                                                        APLICA
                                                    </option>
                                                    <option {{ $hospitalRoom->mesh == 0 ? 'selected' : '' }} value="0">
                                                        NO APLICA
                                                    </option>
                                                </select>
                                                @error('mesh')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
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
                                                    <img src="{{ $hospitalRoom->image }}" id="preview"
                                                        class="img-thumbnail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="floor_id">Piso</label>
                                                <select id="floor_id"
                                                    class="form-control @error('floor_id') is-invalid @enderror"
                                                    name="floor_id"
                                                    value="{{ old('floor_id', $hospitalRoom->floor_id) }}" required>
                                                    @foreach ($floors as $floor)
                                                        <option
                                                            {{ $hospitalRoom->floor_id == $floor->id ? 'selected' : '' }}
                                                            value="{{ $floor->id }}">
                                                            {{ $floor->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('floor_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="celling_id">Techo</label>
                                                <select id="celling_id"
                                                    class="form-control @error('celling_id') is-invalid @enderror"
                                                    name="celling_id"
                                                    value="{{ old('celling_id', $hospitalRoom->celling_id) }}" required>
                                                    @foreach ($cellings as $celling)
                                                        <option
                                                            {{ $hospitalRoom->celling_id == $celling->id ? 'selected' : '' }}
                                                            value="{{ $celling->id }}">
                                                            {{ $celling->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('celling_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="wall_id">Pared</label>
                                                <select id="wall_id"
                                                    class="form-control @error('wall_id') is-invalid @enderror"
                                                    name="wall_id" value="{{ old('wall_id', $hospitalRoom->wall_id) }}"
                                                    required>
                                                    @foreach ($walls as $wall)
                                                        <option
                                                            {{ $hospitalRoom->wall_id == $wall->id ? 'selected' : '' }}
                                                            value="{{ $wall->id }}">
                                                            {{ $wall->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('wall_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    <p class="d-inline">Actualizar</p>
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
