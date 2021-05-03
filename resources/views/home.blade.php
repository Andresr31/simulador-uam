@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Inicio</h3>
            <hr />

            <div>
                @include('layouts.alerts')
                <p>
                    The starting state of the menu will appear collapsed on smaller screens,
                    and will appear non-collapsed on larger screens. When toggled using the
                    button below, the menu will change.
                </p>
                <p>
                    Make sure to keep all page content within the
                    <code>#page-content-wrapper</code>. The top navbar is optional, and just
                    for demonstration. Just create an element with the
                    <code>#menu-toggle</code> ID which will toggle the menu when clicked.
                </p>
            </div>
        </div>
    </main>
@endsection
