@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2 ml-auto" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Reglas:  {{$hospitalRoom->name}}</h3>
            <hr />
            
            <div>
                <div class="card bg-white rounded">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th>Equipo biomédico</th>
                                        <th>Regla</th>
                                        <th>Retroalimentación</th>
                                        <th>Creado en</th>
                                        @if (Auth::user()->hasRole('admin'))
                                            <th class="text-muted">Acciones</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rules as $rule)
                                        <tr>
                                            <td>{{ $rule->biomedicalEquipment->name }}</td>
                                            <td>@if ($rule->required == "TRUE") REQUERIDO  @else @if ($rule->required == "OPTIONAL") OPCIONAL @else NO REQUERIDO @endif @endif</td>
                                            <td>{{ $rule->feedback }}</td>
                                            <td>{{ $rule->created }}</td>
                                            @if (Auth::user()->hasRole('admin'))
                                                <td>
                                                    <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                        data-toggle="tooltip" data-placement="top" title="Editar"
                                                        href="{{ route('rules.edit',[$hospitalRoom->id, $rule->id]) }}">
                                                        <span>
                                                            <i class="fas fa-pen" aria-hidden="true"></i>
                                                        </span>
                                                    </a>
                                                    {{-- <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                        data-toggle="tooltip" data-placement="top" title="ver"
                                                        href="{{ route('rules.show', $rule->id) }}">
                                                        <span>
                                                            <i class="fas fa-eye" aria-hidden="true"></i>
                                                        </span>
                                                    </a> --}}
                                                    <form action="{{route('rules.destroy',$rule->id)}}" method="POST" class="d-inline">
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
                                            @endif
                                            
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

<a class="float btn btn-primary rounded-pill float-right" href="{{ route('rules.create',$hospitalRoom->id) }}"
    role="button" data-toggle="tooltip" data-placement="top" title="Crear equipo biomédico">
    <i class="fas fa-plus my-float"></i>
</a>
