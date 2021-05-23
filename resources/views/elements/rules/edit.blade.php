@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Editar regla</h3>
            <hr />

            <div>
                <div class="row justify-content-center my-2">
                    <div class="col-lg-7 col-md-8">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header text-center"><h5>Información de la regla</h5></div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('rules.update',$rule->id) }}">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="hospital_room_id" value="{{$hospital_room_id}}">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="biomedicalEquipment">Equipo biomédico</label>
                                                <select id="biomedicalEquipment" class="form-control @error('biomedical_equipment_id') is-invalid @enderror"
                                                    name="biomedical_equipment_id" required value="{{ old('biomedical_equipment_id', $rule->biomedical_equipment_id) }}">
                                                    @foreach ($biomedicalEquipments as $biomedicalEquipment)
                                                        <option {{ $rule->biomedical_equipment_id == $biomedicalEquipment->id ? 'selected' : '' }}
                                                            value="{{ $biomedicalEquipment->id }}">
                                                            {{ $biomedicalEquipment->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('biomedical_equipment_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="required">Regla</label>
                                                <select id="required" class="form-control @error('required') is-invalid @enderror"
                                                    name="required" required value="{{ old('required', $rule->required) }}">
                                                        <option {{ $rule->required == "TRUE" ? 'selected' : '' }} value="TRUE">Requerido</option>
                                                        <option {{ $rule->required == "FALSE" ? 'selected' : '' }} value="FALSE">No requerido</option>
                                                        <option {{ $rule->required == "OPTIONAL"? 'selected' : '' }} value="OPTIONAL">Opcional</option>
                                                </select>
                                                @error('required')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="required">Retroalimentación</label>
                                                <textarea name="feedback" id="feedback" class="form-control col-12" rows="5">{{$rule->feedback}}</textarea>
                                                @error('required')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    <p class="d-inline">Crear</p>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
@endsection
