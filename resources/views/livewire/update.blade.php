<!-- Modal -->
<div wire:ignore.selt class="modal fade" id="updateStudentModal" tabindex="-1" arialabelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form>
    <input type="hidden" name="id" wire:model="ids" />
    <div class="form-group">
    <label for="firtname">Name Product</label>
    <input type="text" name="firstname" class="form-control" wire:model="firstname" />
    @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
    <label for="lastname">Description</label>
    <input type="text" name="lastname" class="form-control" wire:model="lastname" />
    @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
    <label for="email">Empresa</label>
    <input type="text" name="email" class="form-control" wire:model="email" />
    @error('email') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" name="phone" class="form-control" wire:model="phone" />
    @error('phone') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <label for="image">Url de Imagen</label>
        <input type="text" name="image" class="form-control" wire:model="image" />
        @error('image') <span class="text-danger">{{$message}}</span> @enderror
        </div>
    </form>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal" wire:click.prevent="update()">Update Product</button>
    </div>
    </div>
    </div>
   </div>