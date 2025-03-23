@push('after_styles')
    @include(backpack_view('base.recipe.crud.styles.ingredients_style'))
@endpush

<!-- SUBTITLE -->
<h4 class="step-subtitle">{{ trans('crud.recipe.steps.ingredients.sub_title') }}</h4>
<div class="youtube-tutorial-link">
    <p><i class="lab la-youtube"></i> Tutorial</p>
</div>

<!-- INPUTS -->
<div>
    <div class="col-sm-12 d-flex flex-column align-items-center">
        <div class="form-wrapper section-ingredients">
            <div class="form-group d-flex align-items-center flex-wrap mt-5 inputs">
               
                <div class="flex-grow-1" style="min-width: 200px;">
                    <label for="ingredient" class="form-label">{{ trans('crud.recipe.fields.choice_ingredient') }}:</label>
                    <select id="ingredient" class="form-control" name="ingredients" style="width: 100%;">
                       
                    </select>
                </div>
               
                <div class="flex-grow-0" style="min-width: 120px;">
                    <label for="quantity" class="form-label">{{ trans('crud.recipe.fields.quantity') }}</label>
                    <input type="number" id="quantity" class="form-control" placeholder="{{ trans('crud.recipe.fields.quantity_placeholder') }}" min="1" style="width: 100%;">
                </div>

                <div class="flex-grow-0" style="min-width: 120px;">
                    <label for="unit" class="form-label">{{ trans('crud.recipe.fields.unit') }}</label>
                    <select id="unit" class="form-control" style="width: 100%;">
                        <option value="g">{{ trans('crud.recipe.steps.ingredients.unit.g') }}</option>
                        <option value="ml">{{ trans('crud.recipe.steps.ingredients.unit.ml') }}</option>
                        <option value="unit">{{ trans('crud.recipe.steps.ingredients.unit.unit') }}</option>
                    </select>
                </div>
            </div>
          
           <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary mt-3" id="add-to-list" style="width: 25%;"><i class="las la-plus"></i> {{ trans('crud.recipe.steps.ingredients.button.add') }}</button>
            </div>

            <hr class="mt-4">

            <div id="selected-ingredients" class="mt-5">
                <!-- Ingredientes selecionados serão exibidos aqui -->
            </div>
    
            <!-- Input Hidden para enviar os ingredientes selecionados no Formulário -->
            <input type="hidden" id="ingredientArray" name="ingredients_data" value="">
        </div>
    </div>
</div>

{{-- ACTIONS --}}
<div class="d-flex justify-content-between align-items-center flex-wrap">
    <div class="d-flex">
        <button type="button" class="btn btn-secondary mt-0" id="prev-2">
            {{ trans('crud.global.back') }}
        </button>

        <button type="button" class="btn btn-primary ml-2 d-flex align-items-center" id="next-2">
            <span>{{ trans('crud.global.next_step') }}</span>
            <i class="las la-chevron-circle-right ml-2"></i>
        </button>
    </div>

    <div class="need-help open-chat" title="{{ trans('crud.global.need_help') }}">
        <i class="las la-question-circle"></i>
    </div>
</div>

@push('after_scripts')
    <script>
        let ingredientArray = [];
        $(document).ready(function() {
            let selectedIngredient = {};

            function updateHiddenInput() {
                $('#ingredientArray').val(JSON.stringify(ingredientArray));
            }

            $('#ingredient').select2({
                placeholder: 'Escolha um Ingrediente',
                minimumInputLength: 2,
                language: {
                    noResults: function () {
                        return '{{ trans("select2.noResults") }}';
                    },
                    searching: function () {
                        return '{{ trans("select2.searching") }}';
                    },
                    inputTooShort: function () {
                        return '{{ trans("select2.inputTooShort") }}';
                    }
                },
                ajax: {
                    url: '/admin/ingredient/search',
                    dataType: 'json',
                    delay: 250,  
                    data: function (params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function (data) {
    
                        let results = [];

                        
                        let systemIngredients = [];
                        let companyIngredients = [];

                        data.results.forEach(function (ingredient) {
                            if (ingredient.company_id === null) {
                                systemIngredients.push(ingredient);
                            } else {
                                companyIngredients.push(ingredient);
                            }
                        });

                        if (systemIngredients.length > 0) {
                            results.push({
                                text: '{{ trans("select2.system") }}',
                                children: systemIngredients
                            });
                        }

                        if (companyIngredients.length > 0) {
                            results.push({
                                text: '{{ trans("select2.user") }}',
                                children: companyIngredients
                            });
                        }

                        return {
                            results: results
                        };
                    },
                    cache: true
                }
            });

            // Ao selecionar um ingrediente no Select2, salvar os dados na variável auxiliar
            $('#ingredient').on('select2:select', function (e) {
                selectedIngredient = {};
                
                const data = e.params.data;

                selectedIngredient = {
                    id: data.id,
                    text: data.text,
                    price: data.price,
                    image: data.image
                };
            });

            $('#add-to-list').click(function() {
                const quantity = $('#quantity').val();
                const unit = $('#unit').val();

                if (selectedIngredient.id && quantity && unit) {
                    const ingredient = {
                        id: selectedIngredient.id,
                        text: selectedIngredient.text,
                        quantity: quantity,
                        unit: unit,
                        image: selectedIngredient.image,
                        price: selectedIngredient.price
                    };
                    
                    addIngredient(ingredient);

                    // Adicionando o item selecionado à div
                    $('#selected-ingredients').append(`
                        <div class="selected-item d-flex align-items-center mb-2" data-id="${ingredient.id}" style="display: flex; flex-wrap: nowrap; gap: 8px;">
                            <img src="${ingredient.image}" alt="${ingredient.text}" class="rounded" style="width: 40px; height: 40px; flex: 0 0 auto;">
                            <span class="ingredient-name" style="flex: 1;">${ingredient.text}</span>
                            <span class="price" style="flex: 0.5;">R$${ingredient.price}</span>
                            <span class="quantity" style="flex: 0.5;">${ingredient.quantity} ${ingredient.unit === 'g' ? ' g' : ingredient.unit === 'ml' ? ' ml' : ' Unidade'}</span>
                            <div class="action-buttons">
                                <a href="#" class="btn btn-sm btn-warning edit-item">
                                    <i class="las la-edit"></i> {{ trans('crud.recipe.steps.ingredients.button.edit')  }}
                                </a>
                                <a href="#" class="btn btn-sm btn-danger remove-item" data-id="${ingredient.id}">
                                    <i class="las la-trash"></i> {{ trans('crud.recipe.steps.ingredients.button.remove')  }}
                                </a>
                            </div>
                        </div>
                    `);
                    
                    $('#ingredient').val(null).trigger('change');
                    $('#quantity').val('');
                    $('#unit').val('gr');

                }else{
                    // Se não atender a condição, exibe o notify
                    new Noty({
                        type: 'error',
                        layout: 'topRight',
                        text: '{{ trans("crud.recipe.steps.ingredients.notify.error_add_list") }}',
                        timeout: 3000
                    }).show();
                }

            });

            // Removendo um ingrediente selecionado
            $('#selected-ingredients').on('click', '.remove-item', function () {
                const itemId = $(this).data('id');
                removeIngredient(itemId);
                $(this).closest('.selected-item').remove();
            });

           
            $('#selected-ingredients').on('click', '.edit-item', function () {
                const itemId = $(this).closest('.selected-item').data('id');
                const quantityText = $(this).closest('.selected-item').find('.quantity').text().trim().split(/(\d+)/);
                const quantity = quantityText[0].trim();
                const unit = quantityText[1].trim();

                $(this).closest('.selected-item').find('.quantity').html(`
                    <input type="number" class="form-control d-inline-block" value="${quantity}" id="edit-quantity-${itemId}" style="width: 80px; display: inline-block;"/>
                    <select class="form-control d-inline-block" id="edit-unit-${itemId}" style="display: inline-block; width: auto;">
                        <option value="g" ${unit === 'g' ? 'selected' : ''}>{{trans('crud.recipe.steps.ingredients.unit.g') }}</option>
                        <option value="ml" ${unit === 'ml' ? 'selected' : ''}>{{trans('crud.recipe.steps.ingredients.unit.ml')}}</option>
                        <option value="unit" ${unit === 'unit' ? 'selected' : ''}>{{trans('crud.recipe.steps.ingredients.unit.unit')}}</option>
                    </select>
                `);

                $(this).replaceWith(`
                    <a href="#" class="btn btn-sm btn-success save-item" data-id="${itemId}">Salvar</a>
                `);
            });

            $('#selected-ingredients').on('click', '.save-item', function () {
                const itemId = $(this).data('id');
                const newQuantity = $(`#edit-quantity-${itemId}`).val();
                const newUnit = $(`#edit-unit-${itemId}`).val();

                if (!newQuantity || !newUnit) {
                    new Noty({
                        type: 'error',
                        layout: 'topRight',
                        text: '{{ trans("crud.recipe.steps.ingredients.notify.error_edit_list") }}',
                        timeout: 3000
                    }).show();
                    return;
                }

                updateIngredient(itemId, newQuantity, newUnit);

                $(this).closest('.selected-item').find('.quantity').html(`${newQuantity}${newUnit === 'g' ? 'g' : newUnit === 'ml' ? 'ml' : 'Unidade'}`);

                $(this).replaceWith(`
                 <a href="#" class="btn btn-sm btn-warning edit-item">
                    <i class="las la-edit"></i> {{ trans('crud.recipe.steps.ingredients.button.edit')  }}
                </a>
                `);
            });

            function addIngredient(ingredient) {
                const index = ingredientArray.findIndex(item => item.id === ingredient.id);
                if (index === -1) {
                    ingredientArray.push(ingredient);
                }
                updateHiddenInput();
                console.log(ingredientArray)
            }

            function updateIngredient(itemId, newQuantity, newUnit) {
                const index = ingredientArray.findIndex(item => item.id === itemId);
                if (index !== -1) {
                    ingredientArray[index].quantity = newQuantity;
                    ingredientArray[index].unit = newUnit;
                }
                updateHiddenInput();
                console.log(ingredientArray)

            }

            function removeIngredient(itemId) {
                const index = ingredientArray.findIndex(item => item.id === itemId);
                if (index !== -1) {
                    ingredientArray.splice(index, 1);
                }
                updateHiddenInput();
                console.log(ingredientArray);
            }
        });

        
        
    </script>
@endpush