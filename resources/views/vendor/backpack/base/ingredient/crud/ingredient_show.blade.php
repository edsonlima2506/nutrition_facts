@extends(backpack_view('blank'))

@push('after_styles')
    @include(backpack_view('base.ingredient.crud.styles.show_style'))
@endpush

@php
    $breadcrumbs = [
        trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
        trans('menu.ingredients.list') => backpack_url('ingredient'),
        trans('backpack::crud.preview').' '.$crud->entity_name => false,
    ];
@endphp

@section('content')
    @section('header')
        <section class="container-fluid">
            <h2>
                <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
                <small>{!! $crud->getSubheading() ?? trans('backpack::crud.preview').' '.$crud->entity_name !!}.</small>

                @if ($crud->hasAccess('list'))
                <small><a href="{{ url($crud->route) }}" class="d-print-none font-sm"><i class="la la-angle-double-{{ config('backpack.base.html_direction') == 'rtl' ? 'right' : 'left' }}"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a></small>
                @endif
            </h2>
        </section>
    @endsection

    <div class="container-fluid bg-white p-4 rounded shadow mt-1 mb-2">
        {{-- HEADER SECTION --}}
        <div class="d-flex mb-4">
            <img src="{{ asset('storage/' . $entry->image) }}" class="ingredient-image" alt="Imagem do Ingrediente">
            <div class="ml-3">
                <div>
                    <h3 class="mb-0">{{ $entry->name }}</h3>
                    <span class="subtitle">{{ $entry->manufacturer }}</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-7">
                {{-- INFO --}}
                <div id="ingredient-info-section">
                    <i class="las la-info"></i>
                    <span>{{ trans('crud.ingredient.steps.info.title') }}</span>
    
                    <div class="show-section-row mt-2 mb-3">
                        {{-- SUPPLIER --}}
                        <div class="card-show-container card-show-container-left-border">
                            <h5 class="card-show-title">{{ trans('crud.ingredient.fields.supplier') }}</h5>
                            <p>{{ $entry->supplier }}</p>
                        </div>
    
                        {{-- PRICE --}}
                        <div class="card-show-container card-show-container-left-border">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="card-show-title">{{ trans('crud.ingredient.fields.price') }}</h5>
                                    <p>${{ $entry->unit_price }}</p>
                                </div>

                                <div class="col-6">
                                    <h5 class="card-show-title">{{ trans('crud.ingredient.steps.info.price_kilo') }}</h5>
                                    <p>${{ $entry->price_kilo }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- DETAILS --}}
                    <div class="show-section-row mt-2 mb-3">
                        <div class="card-show-container large-container card-show-container-left-border">
                            <div class="row">
                                {{-- gross_weight --}}
                                <div class="col-4">
                                    <h5 class="card-show-title">{{ trans('crud.ingredient.steps.info.gross_weight') }}</h5>
                                    <p>{{ $entry->gross_weight }} g/ml</p>
                                </div>

                                {{-- net_weight --}}
                                <div class="col-4">
                                    <h5 class="card-show-title">{{ trans('crud.ingredient.steps.info.net_weight') }}</h5>
                                    <p>{{ $entry->net_weight }} g/ml</p>
                                </div>

                                {{-- loss --}}
                                <div class="col-4">
                                    <h5 class="card-show-title">{{ trans('crud.ingredient.steps.info.loss') }}</h5>
                                    <p>{{ $entry->loss }} g/ml</p>
                                </div>

                                {{-- correction_factor --}}
                                <div class="col-4">
                                    <h5 class="card-show-title">{{ trans('crud.ingredient.steps.info.correction_factor') }}</h5>
                                    <p>{{ $entry->correction_factor }}</p>
                                </div>

                                {{-- revenue --}}
                                <div class="col-4">
                                    <h5 class="card-show-title">{{ trans('crud.ingredient.steps.info.revenue') }}</h5>
                                    <p>{{ $entry->revenue }}%</p>
                                </div>

                                {{-- package --}}
                                <div class="col-4">
                                    <h5 class="card-show-title">{{ trans('crud.ingredient.steps.info.package') }}</h5>
                                    <p>{{ $entry->package }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- STORAGE --}}
                    <div id="ingredient-storage-section">
                        <i class="las la-boxes"></i>
                        <span>{{ trans('crud.ingredient.steps.storage.title') }}</span>

                        <div class="show-section-row mt-2 mb-3">
                            {{-- CLOSED PACKAGE --}}
                            <div class="card-show-container card-show-container-left-border">
                                <h5 class="card-show-title">{{ trans('crud.ingredient.fields.closed_package') }}</h5>
                                
                                {{-- LOCATION --}}
                                @php
                                    $field = 'closed_storage_place';
                                    $info = old($field, []);
                                    $value = $entry->$field;
                                    $mappedValues = [];
    
                                    if(!empty($value)) {
                                        $mappedValues = collect($value)->map(function($item) use ($entry) {
                                            if($item == 'custom') {
                                                return $entry->closed_storage_place_custom;
                                            }

                                            return trans("crud.ingredient.steps.storage.$item");
                                        })->toArray();
                                    }
                                @endphp
                                <div id="closed_package_location_show">
                                    {{ implode(', ', $mappedValues) }}
                                </div>
    
                                {{-- TEMPERATURE --}}
                                @php
                                    $field = 'closed_storage_temperature';
                                    $value = isset($entry) ? $entry->$field : [];
                                    $mappedValues = [];
    
                                    if(!empty($value)) {
                                        $mappedValues = collect($value)->map(function($item) {
                                            if($item == 'custom') {
                                                return $entry->closed_storage_temperature_custom;
                                            }

                                            return trans("crud.ingredient.steps.storage.$item.celsius");
                                        })->toArray();
                                    }
                                @endphp
                                <div id="closed_package_temperature_show">
                                    {{ implode(', ', $mappedValues) }}
                                </div>
                            </div>
                            
                            {{-- OPENED PACKAGE --}}
                            <div class="card-show-container card-show-container-left-border">
                                <h5 class="card-show-title">{{ trans('crud.ingredient.fields.opened_package') }}</h5>
                                
                                {{-- LOCATION --}}
                                @php
                                    $field = 'opened_storage_place';
                                    $value = isset($entry) ? $entry->$field : [];
                                    $mappedValues = [];
    
                                    if(!empty($value)) {
                                        $mappedValues = collect($value)->map(function($item) {
                                            if($item == 'custom') {
                                                return $entry->opened_storage_place_custom;
                                            }

                                            return trans("crud.ingredient.steps.storage.$item");
                                        })->toArray();
                                    }
                                @endphp
                                <div id="opened_package_location_show">
                                    {{ implode(', ', $mappedValues) }}
                                </div>
                                
                                {{-- TEMPERATURE --}}
                                @php
                                    $field = 'opened_storage_temperature';
                                    $value = isset($entry) ? $entry->$field : [];
                                    $mappedValues = [];
    
                                    if(!empty($value)) {
                                        $mappedValues = collect($value)->map(function($item) {
                                            if($item == 'custom') {
                                                return $entry->opened_storage_temperature_custom;
                                            }

                                            return trans("crud.ingredient.steps.storage.$item.celsius");
                                        })->toArray();
                                    }
                                @endphp
                                <div id="opened_package_temperature_show">
                                    {{ implode(', ', $mappedValues) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ALLERGENS --}}
                    <div id="ingredient-allergens-section">
                        <i class="las la-allergies"></i>
                        <span>{{ trans('crud.ingredient.steps.allergens.title') }}</span>

                        <div class="show-section-row mt-2 mb-3">
                            {{-- GLUTEN --}}
                            <div class="card-show-container card-show-container-left-border">
                                <h5 class="card-show-title">{{ trans('enum.allergensOption.gluten') }}</h5>
                                
                                @php
                                    $field = 'ingredient_gluten';
                                    $info = old($field, '');
                                    $value = isset($entry) ? $entry->$field : $info;
                                @endphp
                                <div id="gluten_show">
                                    {{ ($value) ? trans("enum.allergensOption.options.$value") : '' }}
                                </div>
                            </div>
                            
                            {{-- LACTOSE --}}
                            <div class="card-show-container card-show-container-left-border">
                                <h5 class="card-show-title">{{ trans('enum.allergensOption.lactose') }}</h5>
                                
                                @php
                                    $field = 'ingredient_lactose';
                                    $info = old($field, '');
                                    $value = isset($entry) ? $entry->$field : $info;
                                @endphp
                                <div id="lactose_show">
                                    {{ ($value) ? trans("enum.allergensOption.options.$value") : '' }}
                                </div>
                            </div>
                        </div>
    
                        <div class="card-show-container card-show-container-left-border w-100 mb-3">
                            <h5 class="card-show-title">
                                {{ trans('crud.ingredient.steps.allergens.contain') }}
                            </h5>
    
                            @php
                                $field = 'ingredient_allergens';
                                $value = isset($entry) ? $entry->$field ?? [] : [];
                                $derivatives = isset($entry) ? $entry->ingredient_allergens_has_derivatives : false;
                                $mappedValues = [];
                                $andDerivatives = trans('crud.ingredient.steps.allergens.and_derivatives');
    
                                if(!empty($value)) {
                                    $mappedValues = collect($value)->map(function($item) {
                                        return trans("allergens.$item");
                                    })->toArray();
                                }
                            @endphp
                            <div id="ingredient_allergens_show">
                                {{ implode(', ', $mappedValues) }} {{ ($derivatives) ? ' ' . $andDerivatives : '' }}
                            </div>
                        </div>
    
                        <div class="card-show-container card-show-container-left-border w-100 mb-3">
                            <h5 class="card-show-title">
                                {{ trans('crud.ingredient.steps.allergens.allergens_derivatives') }}
                            </h5>
    
                            @php
                                $field = 'ingredient_allergens_derivatives';
                                $value = isset($entry) ? $entry->$field ?? [] : [];
                                $mappedValues = [];
    
                                if(!empty($value)) {
                                    $mappedValues = collect($value)->map(function($item) {
                                        return trans("allergens.$item");
                                    })->toArray();
                                }
                            @endphp
                            <div id="ingredient_allergens_derivatives_show">
                                {{ implode(', ', $mappedValues) }}
                            </div>
                        </div>
    
                        <div class="card-show-container card-show-container-left-border w-100 mb-3">
                            <h5 class="card-show-title">
                                {{ trans('crud.ingredient.steps.allergens.maycontain') }}
                            </h5>
    
                            @php
                                $field = 'ingredient_allergens_maycontain';
                                $value = isset($entry) ? $entry->$field ?? [] : [];
                                $mappedValues = [];
    
                                if(!empty($value)) {
                                    $mappedValues = collect($value)->map(function($item) {
                                        return trans("allergens.$item");
                                    })->toArray();
                                }
                            @endphp
                            <div id="ingredient_allergens_maycontain_show">
                                {{ implode(', ', $mappedValues) }}
                            </div>
                        </div>
    
                        <div class="card-show-container card-show-container-left-border w-100 mb-3">
                            <h5 class="card-show-title">
                                {{ trans('crud.ingredient.steps.allergens.ingredients') }}
                            </h5>
    
                            @php
                                $field = 'seccondary_ingredients';
                                $value = isset($entry) ? $entry->$field ?? [] : [];
                            @endphp
                            <div id="seccondary_ingredients_show">
                                {{ $value !== "" ? implode(', ', $value) : ''}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-5">
                {{-- NUTRITIONAL TABLE --}}
                @include(backpack_view('base.ingredient.crud.partials.nutritional_table'))
            </div>
        </div>
    </div>
@endsection