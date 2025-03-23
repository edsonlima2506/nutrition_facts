<style>
    .form-wrapper {
        max-width: 950px; 
        width: 100%;
    }

    @media (min-width: 2000px) {
        .form-wrapper {
            max-width: 1500px; 
            width: 100%;
        }
    }

    /* .section-ingredients{
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
    } */

    .inputs{
        gap: 10px; width: 100%;
    }
   
    /* Melhorando a visualização dos ingredientes selecionados */
    #selected-ingredients {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        min-height: 260px;
    }

    .selected-item {
        display: flex;
        align-items: center;
        padding: 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        position: relative;
        width: 100%;
    }

    .selected-item img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .selected-item span {
        flex-grow: 1;
        font-weight: bold;
        color: #333;
        margin-right: 10px;
    }

    .selected-item .price {
        flex-shrink: 0;
        font-weight: bold;
        color: #28a745;
        margin-right: 10px;
    }

    .action-buttons .edit-item {
        background-color: var(--primary);
        border: none;
        color: #000;
        cursor: pointer;
    }

    .action-buttons .remove-item {
        background-color: var(--danger);
        border: none;
        color: #000;
        cursor: pointer;
    }

   .save-item{
        background-color: var(--success);
        border: none;
        color: #000;
        cursor: pointer;
    }

    /* Estilizando o botão de remover */
    .selected-item .edit-item:hover 
    {
        background: var(--primary-hover)!important;
        color: white;
    }

    .selected-item .save-item:hover ,
    .selected-item .remove-item:hover {
        opacity: .8;
    }

    /* Ajuste da estrutura para a divisão proporcional do conteúdo */
    .selected-item {
        display: grid;
        grid-template-columns: 10% 40% 20% 30%; /* Ajuste nas proporções */
        align-items: center;
        gap: 8px; /* Ajuste no gap geral */
    }

    
    .action-buttons {
        display: flex;
        gap: 8px; /* Espaço consistente entre os botões */
        justify-content: flex-end;
        align-items: center;
    }

    .action-buttons a {
        padding: 4px 8px; /* Botões compactos */
        font-size: 13px;
        text-align: center;
        white-space: nowrap; /* Evita quebra de texto */
    }


    .selected-item .remove-item,
    .selected-item .edit-item,
    .save-item {
        padding: 4px 8px;
        font-size: 13px; 
    }
    

</style>