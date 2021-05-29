@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Ver simulación</h3>
            <hr />

            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-7 col-md-8">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header text-center"><h5>Información de la simulación</h5></div>
                                <div class="card-body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
