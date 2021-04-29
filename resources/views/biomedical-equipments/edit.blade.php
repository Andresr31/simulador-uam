@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Editar equipo</h3>
            <hr />

            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-7 col-md-8">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header">Información del equipo</div>
                                <div class="card-body">
                                    <form method="POST"
                                        action="{{ route('biomedical-equipments.update', $biomedicalEquipment) }}"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="name">Nombre</label>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name', $biomedicalEquipment->name) }}"
                                                    placeholder="Nombre" autocomplete="name" required autofocus />

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
                                                    required>{{ old('description', $biomedicalEquipment->description) }}</textarea>

                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="category_id">Categoria</label>
                                                <select id="category_id"
                                                    class="form-control @error('category_id') is-invalid @enderror"
                                                    name="category_id" required
                                                    value="{{ old('category_id', $biomedicalEquipment->category_id) }}">
                                                    @foreach ($categories as $category)
                                                        <option
                                                            {{ $biomedicalEquipment->category_id == $category->id ? 'selected' : '' }}
                                                            value="{{ $category->id }}">
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <label for="risk_factor_id">Factor de riesgo</label>
                                                <select id="risk_factor_id"
                                                    class="form-control @error('risk_factor_id') is-invalid @enderror"
                                                    name="risk_factor_id" required
                                                    value="{{ old('risk_factor_id', $biomedicalEquipment->risk_factor_id) }}">
                                                    @foreach ($riskFactors as $risk)
                                                        <option
                                                            {{ $biomedicalEquipment->risk_factor_id == $risk->id ? 'selected' : '' }}
                                                            value="{{ $risk->id }}">
                                                            {{ $risk->name }}
                                                        </option>
                                                    @endforeach
                                                    <option value="">
                                                        No aplica
                                                    </option>
                                                </select>
                                                @error('risk_factor_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-6">
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
                                                    <img src="{{ $biomedicalEquipment->image }}" id="preview"
                                                        class="img-thumbnail">
                                                </div>
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
