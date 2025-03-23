<style>
     .form-wrapper {
        max-width: 950px; 
        width: 100%;
        padding: 20px;
        border-radius: 10px;
        margin: 0 auto;
    }

    @media (min-width: 2000px) {
        .form-wrapper {
            max-width: 1500px; 
            width: 100%;
        }
    }

    .preparation_method{
        min-height: 350px;
    }

    .method-preparation-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    .method-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        width: 100%;
        max-width: 600px;
        margin-bottom: 15px;
    }

    .method-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .method-number {
        font-size: 1.2rem;
        font-weight: bold;
        color: var(--primary-link);
        margin-right: 15px;
    }

    .method-textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
        resize: none;
        min-height: 50px;
        max-height: 150px;
        transition: border-color 0.3s ease;
    }

    .method-textarea:focus {
        border-color: var(--primary-link);
        outline: none;
    }

    .remove-method {
        cursor: pointer;
        font-size: 1.5rem;
        color: #e74c3c;
        transition: color 0.3s ease;
    }

    .remove-method:hover {
        color: #c0392b;
    }

    #add-method {
        display: block;
        width: auto;
        padding: 12px;
        color: white;
        font-size: 1.2rem;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 20px;
    }

    #add-method:focus{
        box-shadow: none;
    }

</style>