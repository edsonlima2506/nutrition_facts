@push('after_styles')
    @include(backpack_view('base.recipe.crud.styles.preparation_method_style'))
@endpush

<!-- SUBTITLE -->
<h4 class="step-subtitle">{{ trans('crud.recipe.steps.preparation_method.sub_title') }}</h4>
<div class="youtube-tutorial-link">
    <p><i class="lab la-youtube"></i> Tutorial</p>
</div>

{{-- Inputs --}}
<div class="col-sm-12 d-flex flex-column align-items-center">
    <div class="form-wrapper section-ingredients w-100">
        <div class="form-group d-flex align-items-center flex-column mt-5 preparation_method">
            <div id="method-preparation-container" class="method-preparation-container w-100 d-flex flex-column align-items-center">
                <!-- Método de Preparo -->
                <div class="method-item d-flex align-items-center justify-content-between" id="method-1" style="margin-bottom: 10px; width: 80%; max-width: 600px;">
                    <span class="method-number" style="flex: 0 0 30px; text-align: center;">1.</span>
                    <textarea class="form-control method-textarea" placeholder="Digite o método de preparo" rows="1" style="flex: 1;"></textarea>
                    <i class="las la-times remove-method" style="cursor: pointer; margin-left: 10px;"></i>
                </div>
            </div>

            <a href="#" id="add-method" class="btn btn-primary mt-3" style="width: auto;">
                <i class="las la-plus-circle"></i> {{ trans("crud.recipe.steps.preparation_method.button.step") }} 
            </a>
        </div>
    </div>
</div>
<input type="hidden" id="methodPreparationInput" name="method_preparation" value="">

{{-- ACTIONS --}}
<div class="d-flex justify-content-between align-items-center flex-wrap">
    <div class="d-flex">
        <button type="button" class="btn btn-secondary mt-0" id="prev-3">
            {{ trans('crud.global.back') }}
        </button>

        <button type="button" class="btn btn-primary ml-2 d-flex align-items-center" id="next-3">
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
        $(document).ready(function() {
            let methodCount = 1;

            $('#add-method').click(function() {
                methodCount++;
                const methodId = 'method-' + methodCount;

                $('#method-preparation-container').append(`
                    <div class="method-item d-flex align-items-center justify-content-between" id="${methodId}" style="margin-bottom: 10px; width: 80%; max-width: 600px;">
                        <span class="method-number" style="flex: 0 0 30px; text-align: center;">${methodCount}.</span>
                        <textarea class="form-control" placeholder="Digite o método de preparo" rows="1" style="flex: 1;"></textarea>
                        <i class="las la-times remove-method" style="cursor: pointer; margin-left: 10px;"></i>
                    </div>
                `);
            });

            $('#method-preparation-container').on('blur', 'textarea', function() {
                const value = $(this).val().trim();

                if (!value) {
                    $(this).closest('.method-item').remove();
                    updateMethodPreparationInput();
                    updateNumbering();
                }else {
                    updateMethodPreparationInput();
                }

            });

            
            $('#method-preparation-container').on('click', '.remove-method', function() {
                $(this).closest('.method-item').remove();
                updateMethodPreparationInput();
                updateNumbering(); 
            });

            
            function updateMethodPreparationInput() {
                const methods = [];

                $('#method-preparation-container textarea').each(function() {
                    const methodText = $(this).val();
                    if (methodText.trim() !== '') {
                        methods.push(methodText);
                    }
                });

                $('#methodPreparationInput').val(JSON.stringify(methods));
                console.log($('#methodPreparationInput').val());
            }

            function updateNumbering() {
                methodCount = 0; // Reinicia o contador
                $('#method-preparation-container .method-item').each(function(index) {
                    methodCount++; // Conta os itens visíveis
                    $(this).find('.method-number').text(methodCount + '.');  // Atualiza a numeração
                });
            }

          
        });
    </script>
@endpush