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
                    <div class="col-lg-12 col-md-8">
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
                                                    data-toggle="collapse" data-target="#collapseZero" aria-expanded="false"
                                                    aria-controls="collapseZero">
                                                    Resumen
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseZero" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordionSimulation">
                                            <div class="card-body">
                                                <h6><strong>Tiempo:             </strong> {{$simulation->time}} min</h6>
                                                <h6><strong>Estudiante:         </strong> {{$simulation->user->fullname}}</h6>
                                                <h6><strong>Número de intentos: </strong> {{$simulation->numberAttempts}}</h6>
                                                <h6><strong>Habitación:         </strong> {{$simulation->hospital_room->name}}</h6>
                                                <h6><strong>Calificación PRE:   </strong> {{$simulation->score_pre}}</h6>
                                                <h6><strong>Calificación SIMULACIÓN: </strong> {{$simulation->score_simulation}}</h6>
                                                <h6><strong>Calificación POST:   </strong> {{$simulation->score_pos}}</h6>
                                                <h6><strong>Calificación TOTAL:   </strong> {{$simulation->score}}</h6>
                                            </div>
                                        </div>
                                    </div>
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
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                          <th scope="col">Equipo biomedico</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($simulation->missingItems as $missingItem)
                                                            <tr>
                                                                <td>{{$missingItem->name}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header bg-secondary" id="headingCorrect">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left text-white collapsed"
                                                    type="button" data-toggle="collapse" data-target="#collapseCorrect"
                                                    aria-expanded="false" aria-controls="collapseCorrect">
                                                    Elementos colocados correctamente
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseCorrect" class="collapse" aria-labelledby="headingCorrect"
                                            data-parent="#accordionSimulation">
                                            <div class="card-body">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                          <th scope="col">Equipo biomedico</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($simulation->correctItems as $correctItem)
                                                            <tr>
                                                                <td>{{$correctItem->name}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header bg-secondary" id="headingFailed">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left text-white" type="button"
                                                    data-toggle="collapse" data-target="#collapseFailed" aria-expanded="false"
                                                    aria-controls="collapseFailed">
                                                    Elementos colocados incorrectamente
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseFailed" class="collapse" aria-labelledby="headingFailed"
                                            data-parent="#accordionSimulation">
                                            <div class="card-body">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                          <th scope="col">Equipo biomedico</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($simulation->failedItems as $failedItem)
                                                            <tr>
                                                                <td>{{$failedItem->name}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header bg-secondary" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left text-white collapsed"
                                                    type="button" data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Resultados evaluación de riesgos
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionSimulation">
                                            <div class="card-body">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                          <th scope="col">Equipo biomedico</th>
                                                          <th scope="col">Factor de riesgo</th>
                                                          <th scope="col">Respuesta</th>
                                                          <th scope="col">Retroalimentación</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($simulation->allItems as $item)
                                                            <tr>
                                                                <td>{{$item->name}}</td>
                                                                <td>{{$item->myRisk->name}}</td>
                                                                <td>{{$item->responseMessage}}</td>
                                                                <td>{{!$item->response ? $item->equipmentRoom->feedback : ""}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header bg-secondary" id="headingFour">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left text-white" type="button"
                                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                                        aria-controls="collapseFour">
                                                        Imagen de Evidencia
                                                    </button>
                                                </h2>
                                            </div>
    
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                data-parent="#accordionSimulation">
                                                <div class="card-body">
                                                    <div class="col-12">
                                                        <div class="mt-3 img-preview justify-content-center">
                                                        <img class="img-thumbnail" id='preview' src='data:image/jpeg;base64,{{ $simulation->image }}' />
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
                </div>
            </div>
        </div>
    </main>
@endsection
