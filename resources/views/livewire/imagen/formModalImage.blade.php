{{-- Modal agregar --}}
 <div wire:ignore.self class="modal fade" id="updateimagenModal" tabindex="-1" aria-labelledby="updateimageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateexampleModalLabel">Editar Imagen</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
        <form wire:submit.prevent="actualizarImagen">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Titulo imagen</label>
                    <input type="text" wire:model="titulo" name="titulo" class="form-control" >

                </div>
                <img src="{{asset('storage')}}/{{$imagen}}" width="200px" height="200px" alt="">
                <div class="mb-3">

                    <input type="file" wire:model="imagen" name="imagen" class="form-control" >

                </div>

            </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" >Guardar</button>
            </div>
        </form>

      </div>
    </div>
  </div>


  {{-- MODAL ELIMINAR --}}

  <div wire:ignore.self class="modal fade" id="deleteimagenModal" tabindex="-1" aria-labelledby="deleteequipoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteexampleModalLabel">Eliminar imagen</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
        <form wire:submit.prevent="destruirImagen">

            <div class="modal-body">
                <h4>Estas seguro que quieres eliminar la imagen?</h4>
            </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" >Si, eliminar</button>
            </div>
        </form>

      </div>
    </div>
  </div>
