<style>
    .finish-label {
        font-weight: 700;
    }

    .finish-info {
        color: var(--primary-link);
        font-weight: 700;
    }

    thead {
        background-color: var(--dark);
        color: #fff;
        text-align: center;
    }

    .image-upload {
        width: 100px;
        height: 100px;
        background-color: #FFF;
        border: #9c9c9c3f 1px solid;
        box-shadow: 0px 4px 8px 0px rgba(81, 97, 129, 0.08);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.7s;
    }

    .image-upload:hover {
        background-color: var(--primary);
        box-shadow: 0px 4px 8px 0px rgba(81, 97, 129, 0.15);
    }

    .image-upload .file-input {
        position: absolute;
        top: 10px;
        left: 25px;
        width: 100px;
        height: 100px;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload i {
        font-size: 40px;
        color: var(--dark);
    }

    .clear-icon {
        position: relative;
        top: 0;
        right: 0;
        display: none;
        cursor: pointer;
        background-color: var(--primary);
        border-radius: 50%;
        transition: background-color 0.3s ease;
        z-index: 10;
    }

    .clear-icon i {
        font-size: 24px !important;
        padding: 2px;
    }

    .image-upload.has-image .clear-icon {
        display: none;
    }

    .image-upload.has-image:hover .clear-icon {
        display: block;
    }

    .crop-container {
        width: 100%;
        text-align: center;
    }

    .cropper-crop-box, .cropper-view-box {
        border-radius: 50% !important;
    }

    .finish-section {
        padding: 10px;
        background-color: white;
        box-shadow: 2px 2px 6px rgba(81, 97, 129, 0.1);
        border-radius: 7px;
    }

    .finish-section-row {
        display: flex;
        gap: 15px;
        align-items: center;
        justify-content: center;
    }

    .card-finish-container {
        background: none;
        border: 1px solid rgba(174,177,184,.26);
        border-radius: 7px;
        min-height: 80px;
        padding: 10px;
        width: 50%;
    }

    .card-finish-container-left-border {
        border-left: 5px solid var(--primary);
    }

    .card-finish-title {
        display: block;
        color: #888d97;
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 5px;
    }

    .card-finish-content {
        font-weight: 400;
    }
</style>