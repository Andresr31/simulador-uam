<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmación requerida</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-danger js-confirm-text">
                    Vas a eliminar un elemento.
                    ¿Estás absolutamente seguro?
                </p>
            </div>
            <div class="modal-footer">
                <form id="form-delete" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
