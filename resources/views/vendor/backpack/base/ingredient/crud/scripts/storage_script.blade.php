{{-- <script>
    $(document).ready(function() {
        function updateHiddenInput(fieldId, values) {
            $("#" + fieldId).val(JSON.stringify(values)); // Salva os valores no input hidden
        }

        function handleStorageOptionSelection(storageId, fieldId) {
            let selectedValues = [];

            $("#" + storageId + " .storage-option").click(function() {
                const value = $(this).data("value");

                if (["refrigerator", "freezer", "custom"].includes(value)) {
                    if ($(this).hasClass("selected")) {
                        $(this).removeClass("selected");
                        selectedValues = selectedValues.filter(item => item !== value);
                        if (value === "custom") {
                            $("#" + storageId + "-custom-input").remove();
                        }
                    } else {
                        $("#" + storageId + " .storage-option").each(function() {
                            if (["dry_fresh", "sheltered_the_sun"].includes($(this).data("value"))) {
                                $(this).removeClass("selected");
                            }
                        });

                        selectedValues = [value];

                        $("#" + storageId + " .storage-option").each(function() {
                            if (["refrigerator", "freezer", "custom"].includes($(this).data("value")) && $(this).data("value") !== value) {
                                $(this).removeClass("selected");
                            }
                        });

                        $(this).addClass("selected");

                        if (value === "custom") {
                            $("#" + storageId + "-custom-input").remove(); // Remover qualquer input existente
                            const customInputHtml = `
                                <div id="${storageId}-custom-input" class="mt-2">
                                    <input type="text" class="form-control" id="${storageId}-custom-text" name="${storageId}-custom-text">
                                </div>`;
                            $("#" + storageId).append(customInputHtml); // Adiciona o input abaixo da seleção
                        }
                    }
                } else {
                    if (selectedValues.includes(value)) {
                        selectedValues = selectedValues.filter(item => item !== value);
                    } else {
                        selectedValues.push(value);
                    }

                    $(this).toggleClass("selected", selectedValues.includes(value));
                }

                updateHiddenInput(fieldId, selectedValues);
            });
        }

        handleStorageOptionSelection("closed-storage-place", "closed_storage_place");
        handleStorageOptionSelection("closed-storage-temperature", "closed_storage_temperature");
        handleStorageOptionSelection("opened-storage-place", "opened_storage_place");
        handleStorageOptionSelection("opened-storage-temperature", "opened_storage_temperature");
    });
</script> --}}

<script>
    $(document).ready(function() {
        function updateHiddenInput(fieldId, values) {
            $("#" + fieldId).val(JSON.stringify(values));
        }

        function selectStorageOption(value, fieldId) {
            let selectedValues = [];

            if ($(this).hasClass("selected")) {
                $(this).removeClass("selected");
                selectedValues = selectedValues.filter(item => item !== value);
            } else {
                selectedValues.push(value);
            }

            $(this).toggleClass("selected", selectedValues.includes(value));

            updateHiddenInput(fieldId, selectedValues);
        }

        $('.storage-option').on('click', function(){
            const value = $(this).data("value");
            const fieldId = $(this).data("reference");

            selectStorageOption(value, fieldId);
        });
    });
</script>