<style>
    .wizard-steps {
        margin-bottom: 30px;
    }

    .wizard-step {
        position: relative;
        text-align: center;
        cursor: pointer;
        font-size: 20px;
        width: 18%;
        padding-inline: 12px;
        padding-block: 15px;
        border-radius: 10px;
        background-color: #FFF;
        border: #9c9c9c3f 1px solid;
        color: var(--dark);
        box-shadow: 0px 4px 8px 0px rgba(81, 97, 129, 0.08);
        overflow: hidden;
        z-index: 1;
        transition: color 0.5s ease-in-out, background 0.5s ease-in-out;
    }

    .wizard-step::before {
        content: '';
        position: absolute;
        width: 80px;
        height: 80px;
        background-color: #f6f6f7;
        border-radius: 50%;
        bottom: -20px;
        right: -20px;
        z-index: -2;
        transition: all 0.7s ease-in-out;
    }

    .wizard-step::after {
        content: '';
        position: absolute;
        width: 100px;
        height: 100px;
        background-color: #efeff0;
        border-radius: 50%;
        bottom: -40px;
        right: -40px;
        z-index: -3;
        transition: all 0.7s ease-in-out;
    }

    .wizard-step.active::before,
    .wizard-step.active::after {
        width: 200%;
        height: 200%;
        bottom: 0;
        right: 0;
        border-radius: 0;
        background: var(--primary);
        z-index: -1;
        transform: scale(1);
    }

    .wizard-content {
        display: none;
    }

    .wizard-content.active {
        display: block;
    }

    .select2-selection__choice {
        background-color: #FFF !important;
        border: #9c9c9c3f 1px solid !important;
        color: #575962 !important;
    }

    .select2-container {
        display: block !important;
    }

    .select2-container--default, .select2-selection--multiple {
        border: 0.5px solid rgba(0,40,100,.12) !important;
        border-radius: 4px;
    }

    label {
        color: #46474d;
        font-weight: 500;
    }

    .step-subtitle {
        color: #414141;
        font-weight: 550;
    }

    .youtube-tutorial-link {
        background-color: var(--green);
        padding-inline: 2px;
        width: 90px;
        text-align: center;
        height: 25px;
        border-radius: 5px;
        color: var(--dark);
    }

    .need-help {
        background-color: var(--primary);
        padding: 10px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        color: var(--dark);
        font-size: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.7s;
    }

    .need-help:hover {
        color: white;
    }
</style>