<style>

    .form-wrapper {
        max-width: 950px; 
        width: 100%;
    }

    .form-recipe-input {
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
    }

    .image-upload {
        width: 100%;
        height: 100%;
        min-height: 250px;
        background-color: #FFF;
        border: #9c9c9c3f 1px solid;
        box-shadow: 0px 4px 8px 0px rgba(81, 97, 129, 0.08);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .image-upload i {
        font-size: 20px;
        color: black;
    }

    .image-container {
        width: 100%;
        height: 100%;
        display: none; /* Só aparece quando a imagem for carregada */
        overflow: hidden;
    }
    
    #image-preview {
        width: 100%;
        height: auto;
    }


    .clear-icon {
        position: absolute;
        top: 2px;
        right: 4px;
        font-size: 3px;
        cursor: pointer;
        display: none;
        background-color: var(--primary); /* Fundo semi-transparente */
        border-radius: 50%; /* Borda arredondada */
        padding: 5px; /* Espaçamento interno para o ícone */
        transition: background-color 0.3s ease; /* Efeito de transição suave */
        z-index: 10;
    }

    .image-upload.has-image .clear-icon {
        display: none; /* Mantém oculto, a menos que haja hover */
    }

    .image-upload.has-image:hover .clear-icon {
        display: block; /* Mostra o ícone no hover */
    }

    /* Sobrepondo o input a image */
    .image-upload .file-input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .crop-container {
        width: 100%;
        text-align: center;
    }

    .modal-backdrop {
        z-index: 1040 !important;
    }

    .modal {
        z-index: 1050 !important;
    }
    
    @media (min-width: 2000px) {
        .image-upload {
            width: 80%; 
            height: 80%;
            margin: auto;
        }
        .col-sm-3 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .top-image{
            width: 80%!important;
        }

        .form-wrapper {
            max-width: 1200px; 
            width: 100%;
        }
    }

</style>