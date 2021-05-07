@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Crear usuario</h3>
            <hr />

            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-7 col-md-8">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header text-center"><h5>Información del usuario</h5></div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('users.store') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="fullname">Nombre completo</label>
                                                <input id="fullname" type="text"
                                                    class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                                    value="{{ old('fullname') }}" placeholder="Nombre" autocomplete="Nombre completo"
                                                    required autofocus />

                                                @error('fullname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email">Email</label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" placeholder="Email" autocomplete="email"
                                                    required />

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="password">{{ __('Contraseña') }}</label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" placeholder="Contraseña" required
                                                    autocomplete="new-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" placeholder="Confirmar contraseña" required
                                                    autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="role">Tipo de usuario</label>
                                                <select id="role" class="form-control @error('role') is-invalid @enderror"
                                                    name="role" required>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">
                                                            {{ $role->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('role')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-student form-group row case-student">
                                            <div class="col-md-6">
                                                <label for="career_id">Carrera</label>
                                                <select id="career_id"
                                                    class="form-control @error('career_id') is-invalid @enderror"
                                                    name="career_id" required>
                                                    @foreach ($careers as $career)
                                                        <option value="{{ $career->id }}">
                                                            {{ $career->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('career_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="semester">Semestre</label>

                                                <select id="semester"
                                                    class="form-control @error('semester') is-invalid @enderror"
                                                    name="semester" required>
                                                    @for ($i = 1; $i <= 10; $i++)
                                                        <option value="{{ $i }}">
                                                            {{ $i }}
                                                        </option>
                                                    @endfor
                                                </select>
                                                @error('semester')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
