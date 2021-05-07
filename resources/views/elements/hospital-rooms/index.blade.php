@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Ambientes hospitalarios</h3>
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
                                        <th>Malla</th>
                                        <th>Creado en</th>
                                        <th class="text-muted">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hospitalRooms as $hr)
                                        <tr>
                                            <td>{{ $hr->id }}</td>
                                            <td>{{ $hr->name }}</td>
                                            <td>{{ $hr->mesh }}</td>
                                            <td>{{ $hr->created }}</td>
                                            <td>
                                                <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                    data-toggle="tooltip" data-placement="top" title="Editar"
                                                    href="{{ route('hospital-rooms.edit', $hr) }}">
                                                    <span>
                                                        <i class="fas fa-pen" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                    data-toggle="tooltip" data-placement="top" title="ver"
                                                    href="{{ route('hospital-rooms.show', $hr) }}">
                                                    <span>
                                                        <i class="fas fa-eye" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <form action="{{route('hospital-rooms.destroy',$hr->id)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-link d-inline p-0 mr-2 text-decoration-none btn-delete"
                                                        data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <span>
                                                            <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                        </span>
                                                    </button>
                                                </form>
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

<a class="float btn btn-primary rounded-pill float-right" href="{{ route('hospital-rooms.create') }}" role="button"
    data-toggle="tooltip" data-placement="top" title="Crear ambiente hospitalario">
    <i class="fas fa-plus my-float"></i>
</a>
