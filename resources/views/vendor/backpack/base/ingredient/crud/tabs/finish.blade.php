@push('after_styles')
    @include(backpack_view('base.ingredient.crud.styles.finish_style'))
@endpush

{{-- SUBTITLE --}}
<h4 class="step-subtitle">{{ trans('crud.ingredient.steps.finish.sub_title') }}</h4>
<a class="youtube-tutorial-link" href="#">
    <i class="lab la-youtube"></i>
    {{ trans('crud.global.tutorial') }}
</a>

<hr>

<div>
    <div class="row mb-3">
        <div class="col-12 col-md-7">
            <div class="finish-section">
                {{-- HEADER SECTION --}}
                <div class="d-flex mb-4">
                    <div class="image-upload">
                        <input type="file" name="ingredient_image" class="file-input" accept="image/*">
                        <i class="las la-camera-retro"></i>
                        <div class="clear-icon">
                            <i class="las la-times"></i>
                        </div>
                    </div>
                    <div class="ml-3">
                        <div>
                            @php
                                $field = 'ingredient_name';
                                $info = old($field, '');
                                $value = isset($entry) ? $entry->name : $info;
                            @endphp
                            <h3 id="ingredient_name_finish" class="mb-0">
                                {{ $value }}
                            </h3>
                            
                            @php
                                $field = 'ingredient_manufacturer';
                                $info = old($field, '');
                                $value = isset($entry) ? $entry->manufacturer : $info;
                            @endphp
                            <span class="finish-info" id="ingredient_manufacturer_finish">
                                {{ $value }}
                            </span>
                        </div>
                    </div>
                </div>
    
                {{-- INFO --}}
                <i class="las la-info"></i>
                <span>{{ trans('crud.ingredient.steps.info.title') }}</span>

                <div class="finish-section-row mt-2 mb-3">
                    {{-- SUPPLIER --}}
                    <div class="card-finish-container card-finish-container-left-border">
                        <h5 class="card-finish-title">{{ trans('crud.ingredient.fields.supplier') }}</h5>
                        
                        @php
                            $field = 'ingredient_supplier';
                            $info = old($field, '');
                            $value = isset($entry) ? $entry->supplier : $info;
                        @endphp
                        <div id="ingredient_supplier_finish">{{ $value }}</div>
                    </div>

                    {{-- PRICE --}}
                    <div class="card-finish-container card-finish-container-left-border">
                        <h5 class="card-finish-title">{{ trans('crud.ingredient.fields.price') }}</h5>
                        
                        @php
                            $field = 'unit_price';
                            $info = old($field, '');
                            $value = isset($entry) ? $entry->$field : $info;
                            
                            if (!empty($value)) {
                                $value = number_format($value, 2, ',', '.');
                            }
                        @endphp
                        <div>$<span id="unit_price_finish">{{ $value }}</span></div>
                    </div>
                </div>

                {{-- STORAGE --}}
                <i class="las la-boxes"></i>
                <span>{{ trans('crud.ingredient.steps.storage.title') }}</span>

                <div class="finish-section-row mt-2 mb-3">
                    {{-- CLOSED PACKAGE --}}
                    <div class="card-finish-container card-finish-container-left-border">
                        <h5 class="card-finish-title">{{ trans('crud.ingredient.fields.closed_package') }}</h5>
                        
                        {{-- LOCATION --}}
                        @php
                            $field = 'closed_storage_place';
                            $info = old($field, []);
                            $value = isset($entry) ? $entry->$field : $info;
                            $mappedValues = [];

                            if(!empty($value)) {
                                $mappedValues = collect($value)->map(function($item) {
                                    return trans("crud.ingredient.steps.storage.$item");
                                })->toArray();
                            }
                        @endphp
                        <div id="closed_package_location_finish">
                            {{ implode(', ', $mappedValues) }}
                        </div>

                        {{-- TEMPERATURE --}}
                        @php
                            $field = 'closed_storage_temperature';
                            $info = old($field, []);
                            $value = isset($entry) ? $entry->$field : $info;
                            $mappedValues = [];

                            if(!empty($value)) {
                                $mappedValues = collect($value)->map(function($item) {
                                    return trans("crud.ingredient.steps.storage.$item.celsius");
                                })->toArray();
                            }
                        @endphp
                        <div id="closed_package_temperature_finish">
                            {{ implode(', ', $mappedValues) }}
                        </div>
                    </div>
                    
                    {{-- OPENED PACKAGE --}}
                    <div class="card-finish-container card-finish-container-left-border">
                        <h5 class="card-finish-title">{{ trans('crud.ingredient.fields.opened_package') }}</h5>
                        
                        {{-- LOCATION --}}
                        @php
                            $field = 'opened_storage_place';
                            $info = old($field, []);
                            $value = isset($entry) ? $entry->$field : $info;
                            $mappedValues = [];

                            if(!empty($value)) {
                                $mappedValues = collect($value)->map(function($item) {
                                    return trans("crud.ingredient.steps.storage.$item");
                                })->toArray();
                            }
                        @endphp
                        <div id="opened_package_location_finish">
                            {{ implode(', ', $mappedValues) }}
                        </div>
                        
                        {{-- TEMPERATURE --}}
                        @php
                            $field = 'opened_storage_temperature';
                            $info = old($field, []);
                            $value = isset($entry) ? $entry->$field : $info;
                            $mappedValues = [];

                            if(!empty($value)) {
                                $mappedValues = collect($value)->map(function($item) {
                                    return trans("crud.ingredient.steps.storage.$item.celsius");
                                })->toArray();
                            }
                        @endphp
                        <div id="opened_package_temperature_finish">
                            {{ implode(', ', $mappedValues) }}
                        </div>
                    </div>
                </div>

                {{-- ALLERGENS --}}
                <i class="las la-allergies"></i>
                <span>{{ trans('crud.ingredient.steps.allergens.title') }}</span>

                <div class="finish-section-row mt-2 mb-3">
                    {{-- GLUTEN --}}
                    <div class="card-finish-container card-finish-container-left-border">
                        <h5 class="card-finish-title">{{ trans('enum.allergensOption.gluten') }}</h5>
                        
                        @php
                            $field = 'ingredient_gluten';
                            $info = old($field, '');
                            $value = isset($entry) ? $entry->$field : $info;
                        @endphp
                        <div id="gluten_finish">
                            {{ ($value) ? trans("enum.allergensOption.options.$value") : '' }}
                        </div>
                    </div>
                    
                    {{-- LACTOSE --}}
                    <div class="card-finish-container card-finish-container-left-border">
                        <h5 class="card-finish-title">{{ trans('enum.allergensOption.lactose') }}</h5>
                        
                        @php
                            $field = 'ingredient_lactose';
                            $info = old($field, '');
                            $value = isset($entry) ? $entry->$field : $info;
                        @endphp
                        <div id="lactose_finish">
                            {{ ($value) ? trans("enum.allergensOption.options.$value") : '' }}
                        </div>
                    </div>
                </div>

                <div class="card-finish-container card-finish-container-left-border w-100 mb-3">
                    <h5 class="card-finish-title">
                        {{ trans('crud.ingredient.steps.allergens.contain') }}
                    </h5>

                    @php
                        $field = 'ingredient_allergens';
                        $info = old($field, []);
                        $value = isset($entry) ? $entry->$field ?? [] : $info;
                        $derivatives = isset($entry) ? $entry->ingredient_allergens_has_derivatives : false;
                        $mappedValues = [];
                        $andDerivatives = trans('crud.ingredient.steps.allergens.and_derivatives');

                        if(!empty($value)) {
                            $mappedValues = collect($value)->map(function($item) {
                                return trans("allergens.$item");
                            })->toArray();
                        }
                    @endphp
                    <div id="ingredient_allergens_finish">
                        {{ implode(', ', $mappedValues) }} {{ ($derivatives) ? ' ' . $andDerivatives : '' }}
                    </div>
                </div>

                <div class="card-finish-container card-finish-container-left-border w-100 mb-3">
                    <h5 class="card-finish-title">
                        {{ trans('crud.ingredient.steps.allergens.allergens_derivatives') }}
                    </h5>

                    @php
                        $field = 'ingredient_allergens_derivatives';
                        $info = old($field, []);
                        $value = isset($entry) ? $entry->$field ?? [] : $info;
                        $mappedValues = [];

                        if(!empty($value)) {
                            $mappedValues = collect($value)->map(function($item) {
                                return trans("allergens.$item");
                            })->toArray();
                        }
                    @endphp
                    <div id="ingredient_allergens_derivatives_finish">
                        {{ implode(', ', $mappedValues) }}
                    </div>
                </div>

                <div class="card-finish-container card-finish-container-left-border w-100 mb-3">
                    <h5 class="card-finish-title">
                        {{ trans('crud.ingredient.steps.allergens.maycontain') }}
                    </h5>

                    @php
                        $field = 'ingredient_allergens_maycontain';
                        $info = old($field, []);
                        $value = isset($entry) ? $entry->$field ?? [] : $info;
                        $mappedValues = [];

                        if(!empty($value)) {
                            $mappedValues = collect($value)->map(function($item) {
                                return trans("allergens.$item");
                            })->toArray();
                        }
                    @endphp
                    <div id="ingredient_allergens_maycontain_finish">
                        {{ implode(', ', $mappedValues) }}
                    </div>
                </div>

                <div class="card-finish-container card-finish-container-left-border w-100 mb-3">
                    <h5 class="card-finish-title">
                        {{ trans('crud.ingredient.steps.allergens.ingredients') }}
                    </h5>

                    @php
                        $field = 'seccondary_ingredients';
                        $info = old($field, []);
                        $value = isset($entry) ? $entry->$field ?? [] : $info;
                    @endphp
                    <div id="seccondary_ingredients_finish">
                        {{ $value !== "" ? implode(', ', $value) : ''}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-5 mt-3 mt-md-0">
            <div class="finish-section">
                {{-- NUTRITIONAL TABLE --}}
                @include(backpack_view('base.ingredient.crud.partials.nutritional_table'))
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between">
    @include('crud::inc.form_save_buttons')
    <div class="need-help open-chat" title="{{ trans('crud.global.need_help') }}">
        <i class="las la-question-circle"></i>
    </div>
</div>

@push('after_scripts')
    @include(backpack_view('base.ingredient.crud.modals.cropp'))
    @include(backpack_view('base.ingredient.crud.scripts.finish_script'))
@endpush
