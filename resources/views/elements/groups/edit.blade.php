@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
                <h3 class="d-inline align-middle">Editar Grupo</h3>
            <hr />

            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-7 col-md-8">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header text-center"> <h5>Información del Grupo</h5></div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('groups.update',$group) }}"enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="name">Nombre del grupo</label>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{$group->name}}" placeholder="Nombre del grupo" 
                                                    required autofocus />

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="code">Código</label>
                                                <input id="code" type="text"
                                                    class="form-control @error('code') is-invalid @enderror" name="code"
                                                    value="{{ $group->code }}" placeholder="Código"
                                                    required autofocus />

                                                @error('code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="main_teacher">Docente</label>
                                                <select id="main_teacher" class="form-control @error('main_teacher') is-invalid @enderror"
                                                    name="main_teacher" required>
                                                    <option value="-1">
                                                        Seleccione un docente...
                                                    </option>
                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">
                                                            {{ $teacher->fullname }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('main_teacher')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="assistant_teacher">Monitor <small>(opcional)</small></label>
                                                <select id="assistant_teacher" class="form-control @error('assistant_teacher') is-invalid @enderror"
                                                    name="assistant_teacher" required>
                                                    <option value="-1">
                                                        Seleccione un usuario...
                                                    </option>
                                                    <option value="0">
                                                        No aplica
                                                    </option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">
                                                            {{ $user->fullname }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('assistant_teacher')
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
