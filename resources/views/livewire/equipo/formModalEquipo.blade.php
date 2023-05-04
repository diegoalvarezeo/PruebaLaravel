

  <!-- Modal AGREGAR-->
  <div wire:ignore.self class="modal fade" id="equipoModal" tabindex="-1" aria-labelledby="equipoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Crear equipo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
        </div>
        <div class="modal-body">
        <form wire:submit.prevent="guardarEquipo">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nombre de equipo</label>
                    <input type="text" wire:model="nombre" name="nombre" class="form-control" required>
                    @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción de equipo</label>
                    <input type="text" wire:model="descripcion" name="descripcion" class="form-control" required>
                    @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio de equipo</label>
                    <input type="number" wire:model="precio" name="precio" class="form-control" required  min="0" >
                    @error('precio') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>

      </div>
    </div>
  </div>


  <!-- Modal UPDATE equipo-->
  <div wire:ignore.self class="modal fade" id="updateequipoModal" tabindex="-1" aria-labelledby="updateequipoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateexampleModalLabel">Editar equipo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
        <form wire:submit.prevent="actualizarEquipo">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nombre de equipo</label>
                    <input type="text" wire:model="nombre" name="nombre" class="form-control" required>
                    @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción de equipo</label>
                    <input type="text" wire:model="descripcion" name="descripcion" class="form-control" required>
                    @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio de equipo</label>
                    <input type="number" wire:model="precio" name="precio" class="form-control" required  min="0" >
                    @error('precio') <span class="text-danger">{{ $message }}</span> @enderror
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

  <div wire:ignore.self class="modal fade" id="deleteequipoModal" tabindex="-1" aria-labelledby="deleteequipoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteexampleModalLabel">Eliminar equipo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
        <form wire:submit.prevent="destruirEquipo">
            <div class="modal-body">
                <h4>Estas seguro que quieres eliminar el equipo?</h4>
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
