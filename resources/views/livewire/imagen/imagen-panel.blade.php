<div>
    @include('livewire.imagen.formModalImage')
    {{-- Form imagen --}}
    <form wire:submit.prevent="crearImage">
        @csrf
        <div class="col">
            <div class="row">
                <label> Titulo
                    <input type="text" wire:model="titulo" class="form-control">

                </label>
            </div>
            <div class="row">
                <label for="formFileSm" class="form-label">Subir image</label>
                <input class="form-control" wire:model="imagen" type="file" id="{{ $identificador }}">
            </div>
            <br>
            <button type="submit" class="btn btn-dark m-3">Subir</button>
        </div>


    </form>




    {{-- Vista imagenes --}}
   {{--  <div class="row">
        @if (isset($imagenes))
            @foreach ($imagenes as $imagen)
                <div class="card col " style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/' . $imagen->imagen) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $imagen->titulo }}</h5>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#updateimagenModal"
                            wire:click="editarImagen({{ $imagen->id }})"class="btn btn-primary">Editar</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteimagenModal"
                            wire:click="eliminarImagen({{ $imagen->id }})" class="btn btn-danger">Eliminar</button>

                    </div>
                </div>
            @endforeach
        @else
            <tr>
                <th scope="row">No hay registros</th>

            </tr>
        @endif
    </div> --}}
    {{-- kjhfdskaffffffffffffffffffffffff --}}
    <!-- Modal gallery -->
    <section class="">
        <!-- Section: Images -->
        <section class="">
            <div class="row">
                @if (isset($imagenes))
                    @foreach ($imagenes as $imagen)

                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                data-ripple-color="light">
                                <img src="{{ asset('storage/' . $imagen->imagen) }}" class="w-100" width="50px" height="200px"/>
                                <div class="card-body">
                                    <div class="row">
                                    <h5 class="card-title">{{ $imagen->titulo }}</h5>
                                </div>
                                <div class="row">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateimagenModal"
                                        wire:click="editarImagen({{ $imagen->id }})"class="btn btn-primary">Editar</button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#deleteimagenModal"
                                        wire:click="eliminarImagen({{ $imagen->id }})" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <tr>
                        <th scope="row">No hay registros</th>

                    </tr>
                @endif

            </div>
        </section>
        <!-- Section: Images -->


    </section>
    <!-- Modal gallery -->

</div>
