@extends('layouts.app')

@section('title', 'Restablecer Contraseña')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow p-2 bg-white rounded">
                <img src="{{ asset('img/elements/forgot-pass.svg') }}" width="300px" class="my-2 img-top-card">
                <div class="card-header text-uppercase text-center">
                    <h5>
                        <i class="fa fa-unlock"></i> 
                        Restablecer Contraseña 
                    </h5>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-simulador btn-block text-uppercase">
                            Socilitar
                            <i class="fa fa-arrow-circle-right"></i> 
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection