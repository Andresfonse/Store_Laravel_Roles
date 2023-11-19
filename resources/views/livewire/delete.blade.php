<!-- Modal -->
<!-- Modal -->
<div wire:ignore.selt class="modal fade" id="deleteStudentModal" tabindex="-1" arialabelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Delete Prodcut</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form>
    <input type="hidden" name="id" wire:model="ids" />
    
    </form>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" wire:click.prevent="delete()">Si,Borrar</button>
    </div>
    </div>
    </div>
   </div>