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
            <div class="finish-section">
                <div class="d-flex mb-4">
                    <div class="image-upload">
                        <i class="las la-camera-retro"></i>
                    </div>
                    <div class="ml-3">
                        <div>
                            <h3 id="ingredient_name_finish" class="mb-0">Gotas de Chocolate</h3>
                            <span class="finish-info" id="ingredient_manufacturer_finish">Hersheys</span>
                        </div>
                    </div>
                </div>
    
                <i class="las la-info"></i>
                <span>{{ trans('crud.ingredient.steps.info.title') }}</span>

                <div class="finish-section-row mt-2 mb-3">
                    <div class="card-finish-container card-finish-container-left-border">
                        <h5 class="card-finish-title">Fornecedor</h5>
                        <h5 class="card-finish-content">Supermercado Pilar</h5>
                    </div>
                    
                    <div class="card-finish-container card-finish-container-left-border">
                        <h5 class="card-finish-title">Preço</h5>
                        <h5 class="card-finish-content">$7,50</h5>
                    </div>
                </div>

                <i class="las la-boxes"></i>
                <span>{{ trans('crud.ingredient.steps.storage.title') }}</span>

                <div class="finish-section-row mt-2">
                    <div class="card-finish-container card-finish-container-left-border">
                        <h5 class="card-finish-title">Embalagem Fechada</h5>
                        <div>{{ trans('crud.ingredient.steps.storage.dry_fresh') }}</div>
                    </div>
                    
                    <div class="card-finish-container card-finish-container-left-border">
                        <h5 class="card-finish-title">Embalagem Aberta</h5>
                        <div>{{ trans('crud.ingredient.steps.storage.dry_fresh') }}</div>
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

