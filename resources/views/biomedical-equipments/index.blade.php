@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Equipos biomédicos</h3>
            <hr />

            <div>
                <div class="card bg-white rounded">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Plan de mantenimiento</th>
                                        <th>Creado en</th>
                                        <th class="text-muted">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($biomedialEquipments as $equipment)
                                        <tr>
                                            <td>{{ $equipment->id }}</td>
                                            <td>{{ $equipment->name }}</td>
                                            <td>{{ $equipment->description }}</td>
                                            <td>{{ $equipment->maintenance_plan }}</td>
                                            <td>{{ $equipment->created }}</td>
                                            <td>
                                                <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                    data-toggle="tooltip" data-placement="top" title="Editar"
                                                    href="{{ route('biomedical-equipments.edit', $equipment) }}">
                                                    <span>
                                                        <i class="fas fa-pen" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                    data-toggle="tooltip" data-placement="top" title="ver"
                                                    href="{{ route('biomedical-equipments.show', $equipment) }}">
                                                    <span>
                                                        <i class="fas fa-eye" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <button class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                    data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                    <span>
                                                        <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

<a class="float btn btn-primary rounded-pill float-right" href="{{ route('biomedical-equipments.create') }}"
    role="button" data-toggle="tooltip" data-placement="top" title="Crear equipo biomédico">
    <i class="fas fa-plus my-float"></i>
</a>
