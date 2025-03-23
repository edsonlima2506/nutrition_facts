<!-- Modal Bootstrap 4 -->
<div class="modal fade" id="cropperModal" tabindex="-1" role="dialog" aria-labelledby="cropperModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cropperModalLabel">Cortar Imagem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="crop-container">
                    <img id="imagePreview" src="" alt="Imagem para cortar" style="max-width: 100%; display: block; margin: auto;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="cancelCrop" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="confirmCrop" class="btn btn-primary">Confirmar Corte</button>
            </div>
        </div>
    </div>
</div>