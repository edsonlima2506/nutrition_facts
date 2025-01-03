<script>
    $(document).ready(function() {
        function updateHiddenInput(fieldId, values) {
            $("#" + fieldId).val(JSON.stringify(values));
        }

        function selectStorageOption(value, fieldId, selectOption) {
            let selectedValues = JSON.parse($('#' + fieldId).val());
            let customInput = $('#' + fieldId + '_custom');

            if (selectOption.hasClass("selected")) {
                selectOption.removeClass("selected");
                selectedValues = selectedValues.filter(item => item !== value);

                if (value == 'custom') {
                    customInput.addClass('d-none');
                }
            } else {
                selectedValues.push(value);

                if (value == 'custom') {
                    customInput.removeClass('d-none');
                }
            }

            selectOption.toggleClass("selected", selectedValues.includes(value));

            updateHiddenInput(fieldId, selectedValues);
        }

        $('.storage-option').on('click', function(){
            const value = $(this).data("value");
            const fieldId = $(this).data("reference");

            selectStorageOption(value, fieldId, $(this));
        });

    });

    @php
        $translations = [
            'dry_fresh' => trans('crud.ingredient.steps.storage.dry_fresh'),
            'sheltered_the_sun' => trans('crud.ingredient.steps.storage.sheltered_the_sun'),
            'refrigerator' => trans('crud.ingredient.steps.storage.refrigerator'),
            'freezer' => trans('crud.ingredient.steps.storage.freezer'),
            'custom' => trans('crud.ingredient.steps.storage.custom'),
            'room_temperature' => trans('crud.ingredient.steps.storage.room_temperature.celsius'),
            'refrigerated' => trans('crud.ingredient.steps.storage.refrigerated.celsius'),
            'frozen' => trans('crud.ingredient.steps.storage.frozen.celsius')
        ];
    @endphp

    var translations = @json($translations);

    var observer = new MutationObserver(function(mutations) {
        updateFinishClosedStoragePlaces();
        updateFinishOpenedStoragePlaces();

        updateFinishClosedStorageTemperatures();
        updateFinishOpenedStorageTemperatures();
    });

    function updateFinishClosedStoragePlaces() {
        var closedStoragePlaces = $('#closed_storage_place').val() ?? [];

        var result = JSON.parse(closedStoragePlaces).map(function(option) {
            return translations[option];
        }).join(', ');

        $('#closed_package_location_finish').empty();
        $('#closed_package_location_finish').append(result);
    }

    function updateFinishOpenedStoragePlaces() {
        var openedStoragePlaces = $('#opened_storage_place').val() ?? [];

        var result = JSON.parse(openedStoragePlaces).map(function(option) {
            return translations[option];
        }).join(', ');

        $('#opened_package_location_finish').empty();
        $('#opened_package_location_finish').append(result);
    }

    function updateFinishClosedStorageTemperatures() {
        var closedStorageTemperatures = $('#closed_storage_temperature').val() ?? [];

        var result = JSON.parse(closedStorageTemperatures).map(function(option) {
            return translations[option];
        }).join(', ');

        $('#closed_package_temperature_finish').empty();
        $('#closed_package_temperature_finish').append(result);
    }

    function updateFinishOpenedStorageTemperatures() {
        var openedStorageTemperatures = $('#opened_storage_temperature').val() ?? [];

        var result = JSON.parse(openedStorageTemperatures).map(function(option) {
            return translations[option];
        }).join(', ');

        $('#opened_package_temperature_finish').empty();
        $('#opened_package_temperature_finish').append(result);
    }

    $('.storage-option').each(function() {
        observer.observe(this, {
            attributes: true
        });
    });
</script>