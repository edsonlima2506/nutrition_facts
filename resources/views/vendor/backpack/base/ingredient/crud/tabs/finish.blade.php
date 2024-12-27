@push('after_styles')
    @include(backpack_view('base.ingredient.crud.styles.finish_style'))
@endpush

{{-- SUBTITLE --}}
<h4 class="step-subtitle">{{ trans('crud.ingredient.steps.finish.sub_title') }}</h4>
<div class="youtube-tutorial-link">
    <p><i class="lab la-youtube"></i> Tutorial</p>
</div>

<hr>

<div>
    <div class="row mb-3">
        <div class="col-12 col-md-7">
            <div class="row">
                <div class="col-4">
                    <div class="image-upload">
                        <i class="las la-cloud-upload-alt"></i>
                    </div>
                </div>
                <div class="col-8">
                    <div>
                        <label class="finish-label">
                            Ingrediente:
                            <span class="finish-info" id="ingredient_name_finish"></span>
                        </label>
                        <br>
                        <label class="finish-label">
                            Fabricante:
                            <span class="finish-info" id="ingredient_manufacturer_finish"></span>
                        </label>
                        <br>
                        <label class="finish-label">
                            Fornecedor:
                            <span class="finish-info" id="ingredient_supplier_finish"></span>
                        </label>
                        <br>
                        <label class="finish-label">
                            Preço:
                            <span class="finish-info" id="unit_price_finish"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-6">
                    {{-- INGREDIENTS --}}
                    <div>
                        <label class="finish-label">
                            Ingredientes:
                            <span class="finish-info" id="seccondary_ingredients_finish"></span>
                        </label>
                    </div>
        
                    {{-- ALLERGENS --}}
                    <div>
                        <label class="finish-label">
                            Glúten:
                            <span class="finish-info" id="gluten_finish"></span>
                        </label>
                    </div>
        
                    <div>
                        <label class="finish-label">
                            Lactose:
                            <span class="finish-info" id="lactose_finish"></span>
                        </label>
                    </div>
        
                    <div>
                        <label class="finish-label">
                            Contém:
                            <span class="finish-info" id="ingredient_allergens_finish"></span>
                        </label>
                    </div>
        
                    <div>
                        <label class="finish-label">
                            Contém derivados de:
                            <span class="finish-info" id="ingredient_allergens_derivatives_finish"></span>
                        </label>
                    </div>
        
                    <div>
                        <label class="finish-label">
                            Pode conter:
                            <span class="finish-info" id="ingredient_allergens_maycontain_finish"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-5 mt-3 mt-md-0">
            {{-- NUTRITIONAL TABLE --}}
            <table class="table table-bordered table-striped" id="finish-nutrtional-table">
                <thead>
                    <tr>
                        <th colspan="2">Quantidade por porção <span id="portion_finish" class="badge badge-success">0</span> g/ml</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nutrients = App\Repositories\NutrientRepository::getMandatoryNutrients();
                    @endphp
                    
                    @foreach ($nutrients as $nutrient)
                        @php
                            $field = data_get($nutrient, 'name');
                            $label = data_get($nutrient, 'label');
                            $measureName = data_get($nutrient, 'measure_name');
                        @endphp
                        <tr>
                            <td>{{ $label }}</td>
                            <td><span class="finish-info" id="{{ $field }}_finish">0</span> {{ $measureName }}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between">
    @include('crud::inc.form_save_buttons')
    <div class="need-help open-chat" title="{{ trans('crud.global.need_help') }}">
        <i class="las la-question-circle"></i>
    </div>
</div>

