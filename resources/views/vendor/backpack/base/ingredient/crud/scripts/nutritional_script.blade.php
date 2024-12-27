<script>
    $(document).ready(function() {
        const nutrientNameInput = $('#new_nutrient_name');
        const nutrientValueInput = $('#new_nutrient_value');

        $('#btn-add-nutrient').on('click', function() {
            if(!verifyFields()) {
                notyMessageError("{{ trans('validation.custom.all_fields_require') }}");
                return;
            }

            const nutrientData = getNutrientData();

            addNewNutrientCard(nutrientData);

            addNewNutrientTableRow(nutrientData);

            clearFormInputs();

            $('#btn-close-modal').trigger('click');
        });

        function verifyFields() {
            if (!nutrientNameInput.val() || !nutrientValueInput.val()) return false;

            return true;
        }

        function getNutrientData() {
            const nutrientName = nutrientNameInput.val();
            const nutrientValue = nutrientValueInput.val();
            const selectedNutrient = nutrientNameInput.find(":selected").data('nutrient');
            const nutrientMeasure = selectedNutrient.measure;
            const nutrientMeasureLabel = selectedNutrient.measure_name;
            const nutrientLabel = selectedNutrient.label;

            return {
                nutrientName,
                nutrientValue,
                selectedNutrient,
                nutrientMeasure,
                nutrientMeasureLabel,
                nutrientLabel
            };
        }

        function addNewNutrientCard(data) {
            const nutrientCard = $('<div>', { class: 'nutrient-card optional-nutrient-card p-2' });

            const nutrientTitle = $('<p>', { class: 'nutrient-title m-0' }).text(data.nutrientLabel);
            
            const hr = $('<hr>', { class: 'mt-2' });
            
            const inputField = $('<input>', {
                class: 'nutrient-input imask',
                type: 'text',
                id: 'nutritional_' + data.nutrientName,
                name: 'nutritional_' + data.nutrientName,
                placeholder: '0',
                value: data.nutrientValue,
                'data-mask': 'number'
            });

            const nutrientMeasureElement = $('<h5>', { class: 'nutrient-measure' }).text(data.nutrientMeasure);

            const deleteButton = $('<button>', {
                class: 'btn btn-danger btn-sm w-100 delete-nutrient-button',
                type: 'button',
            }).append(
                $('<i>', { class: 'las la-trash-alt' })
            );

            nutrientCard.append(
                nutrientTitle,
                hr,
                inputField,
                nutrientMeasureElement,
            );

            $('.add-nutrient-card').before(nutrientCard);

            deleteButton.on('click', function() {
                deleteOptionalNutrient(nutrientCard);
            });
        }

        function deleteOptionalNutrient(nutrientCard) {
            swal({
                icon: "warning",
                type: "warning",
                dangerMode: true,
                title: "{{ trans('swal.title.delete') }}",
                closeOnClickOutside: true,
                buttons: {
                    cancel: {
                        text: "{{ trans('swal.buttons.delete_cancel') }}",
                        value: null,
                        visible: true,
                        className: "",
                        closeModal: true,
                    },
                    confirm: {
                        text: "{{ trans('swal.buttons.delete_confirm') }}",
                        value: true,
                        visible: true,
                        closeModal: true
                    }
                },
            }).then((confirm) => {
                if (confirm) {
                    nutrientCard.remove();
                    swal("{{ trans('swal.feedback.delete_success_title') }}", "{{ trans('swal.feedback.delete_success') }}", "success");
                } else {
                    swal("{{ trans('swal.feedback.delete_cancel_title') }}", "{{ trans('swal.feedback.delete_cancel') }}", "error");
                }
            });
        }

        function addNewNutrientTableRow(data) {
            let row = $('<tr>')
                .append($('<td>').html(data.nutrientLabel)
                )
                .append($('<td>').html(
                    "<span class='finish-info'>"
                        + data.nutrientValue +
                    "</span>"
                    + ' ' +
                    data.nutrientMeasureLabel)
                );

            $("#finish-nutrtional-table").find('tbody')
                .append(row);
        }

        function clearFormInputs() {
            nutrientNameInput.val('').trigger('change');
            nutrientValueInput.val('');
        }
    });
</script>