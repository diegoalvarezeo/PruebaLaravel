<div>
    @include('livewire.equipo.formModalEquipo')
    <!-- Button trigger modal agregar-->

    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#equipoModal">
        Agregar Equipo
    </button>
    {{-- Buscar-busqueda dinamica --}}
    <input type="search" wire:model="search" class="form-control mb-4" placeholder="Buscar">

    <a wire:click.prevent='export' class="btn btn-success mb-4">Exportar</a>
    {{-- alert-estatico @if (session()->has('message'))
        <h5 class="alert alert-success">{{ session('message') }}</h5>
    @endif --}}


    {{-- Vista de equipos y tablas --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Equipos registrados</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>

                    @if (isset($equipos))
                        @foreach ($equipos as $equipo)
                            <tr>
                                <th>
                                    <input wire:model="selectedRows" type="checkbox" value="{{ $equipo->id }}">
                                </th>
                                <th scope="row">{{ $equipo->id }}</th>
                                <td>{{ $equipo->nombre }}</td>
                                <td>{{ $equipo->descripcion }}</td>
                                <td>{{ $equipo->precio }}</td>
                                <td>
                                    @can('equipo.update')
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#updateequipoModal"
                                            wire:click="editarEquipo({{ $equipo->id }})"class="btn btn-primary">Editar</button>
                                    @endcan

                                    @can('equipo.delete')
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteequipoModal"
                                            wire:click="eliminarEquipo({{ $equipo->id }})"
                                            class="btn btn-danger">Eliminar</button>
                                    @endcan

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
        </div>

    </div>
    {{ $equipos->links() }}
</div>
