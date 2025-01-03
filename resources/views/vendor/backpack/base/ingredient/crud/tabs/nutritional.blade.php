@push('after_styles')
    @include(backpack_view('base.ingredient.crud.styles.nutritional_style'))
@endpush

@php
    $inputs = App\Repositories\NutrientRepository::getMandatoryNutrients();
@endphp

{{-- SUBTITLE --}}
<h4 class="step-subtitle">{{ trans('crud.ingredient.steps.nutritional.sub_title') }}</h4>
<a class="youtube-tutorial-link" href="#">
    <i class="lab la-youtube"></i>
    {{ trans('crud.global.tutorial') }}
</a>

{{-- INPUTS --}}
<div class="container mb-5 mt-5">
    {{-- PORTION --}}
    <div class="row">
        <div class="col-12 mb-2 p-0">
            @php
                $field = 'portion';
                $info = old($field, '');
                $value = isset($entry) ? $entry->$field : $info;
            @endphp
            <label for="{{ $field }}" class="form-label">
                {{ trans('crud.ingredient.steps.nutritional.portion') }}
            </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        {{ trans('crud.ingredient.steps.nutritional.portion_info') }}
                    </span>
                </div>

                <input
                    type="number"
                    name="{{ $field }}"
                    id="{{ $field }}"
                    class="form-control form-ingredient-input"
                    value="{{ $value }}"
                >
    
                <div class="input-group-append">
                  <span class="input-group-text">g/ml</span>
                </div>
            </div>
        </div>
    </div>

    <hr>

    {{-- NUTRIENTS --}}
    <div class="row" style="gap: 22px">
        @foreach ($inputs as $input)
            @php
                $field = data_get($input, 'name');
                $label = data_get($input, 'label');
                $measure = data_get($input, 'measure');
                
                $info = old('nutritional_'.$field, '');
                $value = isset($entry) ? $entry->nutritional_values[$field] : $info;
                if ($value && gettype($value) != 'string') {
                    $value = number_format($value, 2, ',', '.');
                }
            @endphp
           
            <div class="nutrient-card p-2">
                <p class="nutrient-title m-0">{{ $label }}</p>
                <hr class="mt-2">
                <input
                    class="nutrient-input imask form-ingredient-input"
                    data-mask="number"
                    type="text"
                    id="nutritional_{{ $field }}"
                    name="nutritional_{{ $field }}"
                    placeholder="0"
                    value="{{ $value }}"
                >
                <h5 class="nutrient-measure">{{ $measure }}</h5>
            </div>
        @endforeach
    </div>

    {{-- OPTIONAL NUTRIENTS --}}
    <div class="row mt-3 mb-3">
        <h4 class="step-subtitle">{{ trans('crud.ingredient.steps.nutritional.optional_nutrients') }}</h4>
    </div>
    <div class="optional-nutrient-fields row" style="gap: 22px">
        {{-- ADD NUTRIENT --}}
        <div class="add-nutrient-card p-2" data-toggle="modal" data-target="#newNutrientModal">
            <i class="las la-plus"></i>
        </div>
    </div>
</div>
{{-- END INPUTS --}}

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
    @include(backpack_view('base.ingredient.crud.scripts.nutritional_script'))
@endpush