<script>
    document.addEventListener('DOMContentLoaded', function () {
        let cropper = null;
        const fileInput = document.querySelector('.file-input');
        const imageUpload = document.querySelector('.image-upload');
        const clearIcon = document.querySelector('.clear-icon');
        const icon = imageUpload.querySelector('i');

        const imagePreview = document.getElementById('imagePreview');
        const confirmCrop = document.getElementById('confirmCrop');
        const cancelCrop = document.getElementById('cancelCrop');

        function resetImageUpload() {
            fileInput.value = '';
            imageUpload.style.backgroundImage = '';
            imageUpload.style.backgroundColor = '#FFF';
            icon.style.display = 'flex';
            imageUpload.classList.remove('has-image');
        }

        function openCropperModal(imageSrc) {
            imagePreview.src = imageSrc;

            jQuery.noConflict();
            $('#cropperModal').modal({
                backdrop: false,
                keyboard: false,
            });

            if (cropper) cropper.destroy();

            cropper = new Cropper(imagePreview, {
                aspectRatio: NaN,
                viewMode: 1,
                dragMode: 'move',
                zoomable: true,
                scalable: true,
                cropBoxMovable: true,
                cropBoxResizable: true,
            });
        }

        fileInput.addEventListener('change', function () {
            const file = this.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = (e) => openCropperModal(e.target.result);
            reader.readAsDataURL(file);
        });

        confirmCrop.addEventListener('click', function () {
            if (!cropper) return;

            const croppedCanvas = cropper.getCroppedCanvas();
            const croppedImage = croppedCanvas.toDataURL();

            imageUpload.style.backgroundImage = `url(${croppedImage})`;
            imageUpload.style.backgroundSize = 'contain';
            imageUpload.style.backgroundPosition = 'center';
            imageUpload.style.backgroundRepeat = 'no-repeat';
            imageUpload.classList.add('has-image');

            icon.style.display = 'none';

            $('#cropperModal').modal('hide');
        });

        cancelCrop.addEventListener('click', function () {
            $('#cropperModal').modal('hide');
            resetImageUpload();
        });

        clearIcon.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            resetImageUpload();
        });
    });
</script>