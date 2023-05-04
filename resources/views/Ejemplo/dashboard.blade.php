@extends('layouts.baseMenu')
{{-- @section('title')

@endsection --}}

@section("content")
<div class="container">
    <livewire:equipo.index>



@endsection
@section('scripts')
<script>
    window.addEventListener('close-model', event => {
        $("#equipoModal").modal('hide');
        $("#updateequipoModal").modal('hide');
        $("#deleteequipoModal").modal('hide');

    })
    </script>

@endsection
