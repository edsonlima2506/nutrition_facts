<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

@include(backpack_view('base.ingredient.crud.modals.chat'))

<script>
    $(document).ready(function() {
        $('.wizard-step').click(function() {
            var stepId = $(this).attr('id');
            var stepNumber = stepId.split('-')[1];

            $('.wizard-content').removeClass('active');

            $('#step-content-' + stepNumber).addClass('active');

            $('.wizard-step').removeClass('active');
            $(this).addClass('active');
        });

        $('#next-1').click(function() {
            $('#step-2').trigger('click');
        });
        $('#next-2').click(function() {
            $('#step-3').trigger('click');
        });
        $('#next-3').click(function() {
            $('#step-4').trigger('click');
        });
        $('#next-4').click(function() {
            $('#step-5').trigger('click');
        });

        $('#prev-2').click(function() {
            $('#step-1').trigger('click');
        });
        $('#prev-3').click(function() {
            $('#step-2').trigger('click');
        });
        $('#prev-4').click(function() {
            $('#step-3').trigger('click');
        });
        $('#prev-5').click(function() {
            $('#step-4').trigger('click');
        });

        // FILL FINISH INPUTS

        $('.form-ingredient-input').on('change', function() {
            let inputId = $(this).attr('id');
            
            $('#'+inputId+'_finish').html($(this).val());
        });

        $('.select2-multiple').on('change', function() {
            var selectedOptions = $(this).select2('data');
            
            var selectedTexts = selectedOptions.map(function(option) {
                return option.text;
            });
            
            var resultText = selectedTexts.join(', ');

            var selectId = $(this).attr('id');

            $('#'+selectId+'_finish').html(resultText);
        });
    });
</script>