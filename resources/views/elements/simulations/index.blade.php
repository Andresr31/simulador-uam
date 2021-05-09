@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Simulaciones</h3>
            <hr />

            <div>
                <div class="card bg-white rounded">
                    <div class="card-body">
                        
                        Simulaciones

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

{{-- <a class="float btn btn-primary rounded-pill float-right" href="{{ route('users.create') }}" role="button"
    data-toggle="tooltip" data-placement="top" title="Crear usuario">
    <i class="fas fa-plus my-float"></i>
</a> --}}
