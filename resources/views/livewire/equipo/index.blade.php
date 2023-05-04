<div>
  @include("livewire.equipo.formModalEquipo")
  <!-- Button trigger modal -->

    <button type="button" class="btn btn-primary m-4" data-bs-toggle="modal" data-bs-target="#equipoModal">
        Agregar Equipo
    </button>
    @if(session()->has('message'))
        <h5 class="alert alert-success">{{session("message")}}</h5>
    @endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
            @if(isset($equipos))
            @foreach ($equipos as $equipo)
            <tr>
                <th scope="row">{{ $equipo->id }}</th>
                <td>{{ $equipo->nombre }}</td>
                <td>{{ $equipo->descripcion }}</td>
                <td>{{ $equipo->precio }}</td>
                <td>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateequipoModal" wire:click="editarEquipo({{$equipo->id}})"class="btn btn-primary">Edit</button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#deleteequipoModal" wire:click="eliminarEquipo({{$equipo->id}})" class="btn btn-danger">Eliminar</button>


                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <th scope="row">No hay registros</th>

            </tr>
            @endif


        </tbody>
      </table>
    {{$equipos->links()}}
</div>
