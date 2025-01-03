<script>
    $(document).ready(function() {
        $('#ingredient_allergens').select2();
        $('#ingredient_allergens_derivatives').select2();
        $('#ingredient_allergens_maycontain').select2();

        $("input[name='ingredient_gluten']").on("change", function() {
            var selectedId = $("input[name='ingredient_gluten']:checked").attr('id');
            var selectedText = $("label[for='" + selectedId + "']").text();
            
            $('#gluten_finish').html(selectedText);
        });

        $("input[name='ingredient_lactose']").on("change", function() {
            var selectedId = $("input[name='ingredient_lactose']:checked").attr('id');
            var selectedText = $("label[for='" + selectedId + "']").text();
            
            $('#lactose_finish').html(selectedText);
        });

        @php
            $andDerivatives = trans('crud.ingredient.steps.allergens.and_derivatives');
        @endphp

        $('#ingredient_allergens_has_derivatives').on('change', function() {
            if($(this).prop("checked")) {
                var allergensContain = $('#ingredient_allergens_finish').html();
                allergensContain += (" " + @json($andDerivatives));

                $('#ingredient_allergens_finish').html(allergensContain);
            } else {
                var allergensContain = $('#ingredient_allergens_finish').html();

                if (allergensContain.includes(@json($andDerivatives))) {
                    allergensContain = allergensContain.replace(' ' + @json($andDerivatives), '');
                }

                $('#ingredient_allergens_finish').html(allergensContain);
            }
        });

        $('#seccondary_ingredients').select2({
            tags: true
        });
    });
</script>