@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Grupo: {{$group->name}}</h3>
            <hr />
            
            @if (Auth::user()->hasRole('admin'))
                <div class=" float-right">
                    {{-- <div class="my-2 pb-1 text-right d-inline"><a class="btn btn-simulador" href="{{route('groups.index')}}"> <i class="fa fa-eye"></i> Ver información</a></div> --}}
                    <div class="my-2 pb-1 text-right d-inline"><a class="btn btn-link d-inline p-0 mr-2 text-decoration-none " href="{{route('groups.edit',$group)}}"> <i class="fa fa-pen"></i></a></div>
                    <form action="{{route('groups.destroy',$group)}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none btn-delete"
                            data-toggle="tooltip" data-placement="top" title="Eliminar">
                            <span>
                                <i class="fas fa-trash-alt" aria-hidden="true"></i>
                            </span>
                        </a>
                    </form>
                    {{-- <div class="my-2 pb-1 text-right d-inline"><a class="btn btn-simulador" href="{{route('groups.delete')}}"> <i class="fa fa-trash"></i>Eliminar grupo</a></div>     --}}
                
                </div><br> 
            @endif
            
            <div class="text-center">
                <h4><strong>Estudiantes</strong> </h4>          
            </div>
            @if (!Auth::user()->isAssistantTeacher())

                <a data-toggle="collapse" href="#collapseCode" role="button" aria-expanded="false" aria-controls="collapseCode" class="ml-3 btn btn-simulador">
                    <i class="fa fa-sign-in-alt"></i>
                    Inscribir estudiante
                </a>
                <div class="collapse col-6" id="collapseCode" class="mt-3">
                    <div class="pt-4">
                        <form action="{{route('enrollments.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="group_id" value="{{$group->id}}">
                            <div class="mt-2 d-inline">
                                <select id="student_id" class="form-control @error('student_id') is-invalid @enderror"
                                    name="student_id" required>
                                    <option value="-1">
                                        Seleccione un estudiante ... 
                                    </option>
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}">
                                            {{ $student->fullname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-simulador btn-sm d-inline" type="submit" id="btn-inscribirse">Inscribir</button>
                        </form>
                    </div>
                </div>

            @endif
            
            <div class="my-3">
                <div class="card bg-white rounded">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Carrera</th>
                                        <th>Semestre</th>
                                        <th>Acciones</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enrollments as $enrollment)
                                        <tr>
                                            <td>{{ $enrollment->student->fullname }}</td>
                                            <td>{{ $enrollment->student->email }}</td>
                                            <td>{{ $enrollment->student->career->name }}</td>
                                            <td>{{ $enrollment->student->semester }}</td>
                                            @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('teacher'))
                                                <td>
                                                    <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                        data-toggle="tooltip" data-placement="top" title="Ver simulaciones"
                                                        href="{{ route('simulations.showSimulation', $enrollment->student) }}">
                                                        <span>
                                                            <i class="fas fa-desktop" aria-hidden="true"></i>
                                                        </span>
                                                    </a>
                                                    @if (Auth::user()->hasRole('admin'))
                                                        <form action="{{route('enrollments.destroy',$enrollment)}}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="button" class="btn btn-link d-inline p-0 mr-2 text-decoration-none btn-delete"
                                                                data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                <span>
                                                                    <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                                </span>
                                                            </button>
                                                        </form>
                                                    @endif
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
