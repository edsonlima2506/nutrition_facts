<style>
     .form-wrapper {
        max-width: 1200px; 
        width: 100%;
        padding: 20px;
        border-radius: 10px;
        margin: 0 auto;
    }

    .financial-column,
    .pricing-column {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .financial-container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 30px;
    }

    .financial-steps-container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 30px;
    }

    .financial-step {
        margin-bottom: 30px;
        flex: 1;
        cursor: pointer;
        padding: 10px;
        text-align: center;
        background-color: #f0f0f0;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .financial-step:hover {
        background-color: #ddd;
    }

    .financial-step-content {
        display: none; /* Inicialmente escondido */
    }

    .financial-step-content.active {
        display: block; /* Mostra o conteúdo do step ativo */
    }

    .financial-cards {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .financial-card {
        background-color: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
    }

    .card-column {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .pricing-summary {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .pricing-info {
        font-size: 14px;
    }

    .progress-bar {
        width: 100%;
        height: 5px;
        background: #eee;
        border-radius: 5px;
    }

    .pricing-step h5 {
        margin-bottom: 10px;
    }

    .pricing-column {
        display: flex;
        flex-direction: column;
    }
</style>