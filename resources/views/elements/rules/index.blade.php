@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Reglas</h3>
            <hr />

            <div>
                <div class="card bg-white rounded">
                    <div class="card-body row col-12">
                        @foreach ($hospitalRooms as $hospitalRoom)
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <img src="{{ asset($hospitalRoom->image) }}" width="300px" class="my-2 img-top-card">
                                    <div class="card-body">
                                        <a href="{{ route('rules.show',$hospitalRoom->id) }}" class="btn btn-block btn-simulador">
                                            <i class="fa fa-clinic-medical"></i>
                                            {{$hospitalRoom->name}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

