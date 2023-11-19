<!-- Modal -->



<div wire:ignore.selt class="modal fade" id="lookStudentModal" tabindex="-1" arialabelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Juego</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form>
    <input type="hidden" name="id" wire:model="ids" />
    <div class="form-group">

        <img class="card-img-top" src="https://i11b.3djuegos.com/juegos/8407/fallout_new_vegas__ultimate_edition/fotos/ficha/fallout_new_vegas__ultimate_edition-1904457.jpg" width="100" height="500">
<br><br>
    <label for="firtname"> Juego </label>
    <input type="text" name="firstname" class="form-control" wire:model="firstname" disabled/>
    @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
    </div>

  
   
    <div class="form-group">
    <label for="phone">Precio</label>
    <input type="text" name="phone" class="form-control" wire:model="phone" disabled />
    @error('phone') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <label for="image">Imagen del Juego</label>
        <input type="text" name="image" class="form-control" wire:model="image" disabled />
        @error('image') <span class="text-danger">{{$message}}</span> @enderror
        </div>


    </form>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Buy <i class="fa-solid fa-cart-shopping fa-beat fa-lg"></i></button>
    
    </div>

   
    </div>
    </div>
   </div>