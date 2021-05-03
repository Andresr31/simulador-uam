@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Ver usuario</h3>
            <hr />

            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-7 col-md-8">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header">Información del usuario</div>
                                <div class="card-body">
                                    <h6 class="card-subtitle font-weight-bold">Nombre completo</h6>
                                    <p class="card-text ml-2 mb-3">{{ $user->fullname }}</p>
                                    <h6 class="card-subtitle font-weight-bold">Email</h6>
                                    <p class="card-text ml-2 mb-3">{{ $user->email }}</p>
                                    <h6 class="card-subtitle font-weight-bold">Tipo de usuario</h6>
                                    <p class="card-text ml-2 mb-3">{{ $user->roles[0]->name }}</p>
                                    @if ($user->roles[0]->id == 3)
                                        <h6 class="card-subtitle font-weight-bold">Carrera</h6>
                                        <p class="card-text ml-2 mb-3">{{ $user->career->name }}</p>
                                        <h6 class="card-subtitle font-weight-bold">Semestre</h6>
                                        <p class="card-text ml-2 mb-3">{{ $user->semester }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
