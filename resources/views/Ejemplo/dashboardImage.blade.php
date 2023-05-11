@extends('layouts.dashboardPrueba')
@section('content')
    {{-- another way-<livewire:imagen.imagen-panel> --}}
    @livewire('imagen.imagen-panel')
@endsection
@section('js')
    <script>
        /* Eventos form y notificaciones */
        window.addEventListener('close-model', event => {
            $("#updateimagenModal").modal('hide');
            $("#deleteimagenModal").modal('hide');
        });
        window.addEventListener('alert', event => {
            toastr.success(event.detail.message);
        });
    </script>
@endsection
