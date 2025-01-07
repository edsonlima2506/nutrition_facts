<style>
    .ingredient-image {
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

    .ingredient-image i {
        font-size: 40px;
        color: var(--dark);
    }

    .subtitle {
        color: var(--primary-link);
        font-weight: 700;
    }

    #nutrtional-table thead {
        background-color: var(--dark);
        color: #fff;
        text-align: center;
    }

    .show-section-row {
        display: flex;
        gap: 15px;
        align-items: center;
        justify-content: center;
    }

    .card-show-container {
        background: none;
        border: 1px solid rgba(174,177,184,.26);
        border-radius: 7px;
        min-height: 80px;
        padding: 10px;
        width: 50%;
    }

    .card-show-container.large-container {
        width: 100% !important;
    }

    .card-show-container-left-border {
        border-left: 5px solid var(--primary);
    }

    .card-show-title {
        display: block;
        color: #888d97;
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 5px;
    }

    .card-show-content {
        font-weight: 400;
    }
</style>