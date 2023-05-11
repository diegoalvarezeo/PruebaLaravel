@extends('layouts.dashboardPrueba')
@section('content')
    <livewire:equipo.index>
    @endsection
    @section('js')
        <script>
            /* Eventos form y notificaciones */
            window.addEventListener('close-model', event => {
                $("#equipoModal").modal('hide');
                $("#updateequipoModal").modal('hide');
                $("#deleteequipoModal").modal('hide');

            });
            window.addEventListener('alert', event => {
                toastr.success(event.detail.message);
            })
        </script>
@endsection
