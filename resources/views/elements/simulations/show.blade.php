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
                                <div class="card-header text-center">
                                    <h5>Información de la simulación</h5>
                                </div>
                                <div class="accordion" id="accordionSimulation">
                                    <div class="card">
                                        <div class="card-header bg-secondary" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left text-white" type="button"
                                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                    Elementos que faltaron
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordionSimulation">
                                            <div class="card-body">
                                                {{$simulation->report}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header bg-secondary" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left text-white collapsed"
                                                    type="button" data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Elementos que sobraron
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordionSimulation">
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header bg-secondary" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left text-white collapsed"
                                                    type="button" data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Elementos que fallaron la validación
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionSimulation">
                                            <div class="card-body">

                                            </div>
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
