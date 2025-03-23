<style>
    .table-header {
        width: 100%;
        background-color: #334257;
        color: #ffffff;
        text-align: center;
        font-size: 25px;
    }

    .td-align-middle {
        vertical-align: middle;
    }

    .td-unit {
        vertical-align: middle;
        text-align: center;
        background-color: #f7f8fa;
    }

    .nutrient-card {
        width: 120px;
        height: 100%;
        background-color: #f6f6f7;
        border-radius: 10px;
        text-align: center;
    }

    .nutrient-title {
        color: #334257;
        font-weight: 600;
        height: 50px;
        align-content: center;
        padding-inline: 5px;
        box-sizing: border-box;
    }

    .nutrient-input {
        background: none;
        border: none;
        text-align: center;
        width: 100%;
        font-size: 25px;
        font-weight: 700;
        color: #334257;
    }

    .nutrient-input:focus {
        border: none !important;
        box-shadow: none;
        outline: 0;
    }

    .nutrient-measure {
        color: #334257;
    }

    .add-nutrient-card {
        width: 120px;
        height: 170px;
        background-color: #FFF;
        border: #9c9c9c3f 1px solid;
        box-shadow: 0px 4px 8px 0px rgba(81, 97, 129, 0.08);
        border-radius: 10px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.7s;
    }

    .add-nutrient-card:hover {
        background-color: var(--primary);
    }

    .add-nutrient-card i {
        color: #575962;
        font-size: 40px;
        align-content: center;
        transition: transform 1s ease;
    }

    .add-nutrient-card:hover i {
        color: #FFF;
        transform: rotate(90deg);
    }

    .optional-nutrient-card .nutrient-title {
        overflow: hidden;       
        text-overflow: ellipsis;
        width: 100%;
        height: 50px;
        display: block;
    }

    .select2-container--default .select2-selection--single {
        border: none !important;
    }
</style>