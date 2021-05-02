@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2 ml-auto" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Techos</h3>
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
                                        <th>Creado en</th>
                                        <th class="text-muted">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cellings as $celling)
                                        <tr>
                                            <td>{{ $celling->id }}</td>
                                            <td>{{ $celling->name }}</td>
                                            <td>{{ $celling->description }}</td>
                                            <td>{{ $celling->created_at }}</td>
                                            <td>
                                                <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                    data-toggle="tooltip" data-placement="top" title="Editar"
                                                    href="{{ route('celling.edit', $celling->id) }}">
                                                    <span>
                                                        <i class="fas fa-pen" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                    data-toggle="tooltip" data-placement="top" title="ver"
                                                    href="{{ route('celling.show', $celling->id) }}">
                                                    <span>
                                                        <i class="fas fa-eye" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <form action="{{route('celling.destroy',$celling->id)}}" method="POST" class="d-inline">
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

<a class="float btn btn-primary rounded-pill float-right" href="{{ route('celling.create') }}"
    role="button" data-toggle="tooltip" data-placement="top" title="Crear techo">
    <i class="fas fa-plus my-float"></i>
</a>
