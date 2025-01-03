{{-- SUBTITLE --}}
<h4 class="step-subtitle">{{ trans('crud.ingredient.steps.info.sub_title') }}</h4>
<a class="youtube-tutorial-link" href="#">
    <i class="lab la-youtube"></i>
    {{ trans('crud.global.tutorial') }}
</a>

{{-- INPUTS --}}
<div>
    {{-- NAME --}}
    <div class="mb-3 mt-5">
        @php
            $field = 'ingredient_name';
            $info = old($field, '');
            $value = isset($entry) ? $entry->name : $info;
        @endphp
        <label for="{{ $field }}" class="form-label">
            {{ trans('crud.ingredient.steps.info.name') }}
        </label>
        <input
            type="text"
            class="form-control form-ingredient-input"
            id="{{ $field }}"
            name="{{ $field }}"
            value="{{ $value }}"
            placeholder="{{ trans('crud.ingredient.fields.name_placeholder') }}"
        >
    </div>
    
    {{-- MANUFACTURER --}}
    <div class="mb-3">
        @php
            $field = 'ingredient_manufacturer';
            $info = old($field, '');
            $value = isset($entry) ? $entry->manufacturer : $info;
        @endphp
        <label for="{{ $field }}" class="form-label">
            {{ trans('crud.ingredient.steps.info.manufacturer') }}
        </label>
        <input
            type="text"
            class="form-control form-ingredient-input"
            id="{{ $field }}"
            name="{{ $field }}"
            value="{{ $value }}"
        >
    </div>

    {{-- SUPPLIER --}}
    <div class="mb-3">
        @php
            $field = 'ingredient_supplier';
            $info = old($field, '');
            $value = isset($entry) ? $entry->supplier : $info;
        @endphp
        <label for="{{ $field }}" class="form-label">
            {{ trans('crud.ingredient.steps.info.supplier') }}
        </label>
        <input
            type="text"
            class="form-control form-ingredient-input"
            id="{{ $field }}"
            name="{{ $field }}"
            value="{{ $value }}"
        >
    </div>
    
    <div class="row mt-5">
        {{-- PRICE --}}
        <div class="mb-3 col-3">
            @php
                $field = 'unit_price';
                $class = 'form-control form-ingredient-input ingredient-extra-field imask';
                $info = old($field, '');
                $value = isset($entry) ? $entry->$field : $info;
                
                if (!empty($value)) {
                    $value = number_format($value, 2, ',', '.');
                }
            @endphp
            {{-- LABEL --}}
            <label for="{{ $field }}" class="form-label">
                {{ trans('crud.ingredient.steps.info.price') }}
                <i class="las la-info-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.ingredient.steps.info.price_info') }}"></i>
            </label>
            {{-- INPUT GROUP --}}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="las la-dollar-sign"></i></span>
                </div>
                <input
                    type="text"
                    class="{{ $class }}"
                    data-mask="decimal"
                    id="{{ $field }}"
                    name="{{ $field }}"
                    value="{{ $value }}"
                >
            </div>
        </div>
    
        {{-- GROSS WEIGHT --}}
        <div class="mb-3 col-3">
            @php
                $field = 'gross_weight';
                $class = 'form-control form-ingredient-input ingredient-extra-field imask';
                $info = old($field, '');
                $value = isset($entry) ? $entry->$field : $info;
            @endphp
            {{-- LABEL --}}
            <label for="{{ $field }}" class="form-label">
                {{ trans('crud.ingredient.steps.info.gross_weight') }}
                <i class="las la-info-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.ingredient.steps.info.gross_weight_info') }}"></i>
            </label>
            {{-- INPUT GROUP --}}
            <div class="input-group mb-3">
                <input
                    type="text"
                    class="{{ $class }}"
                    id="{{ $field }}"
                    name="{{ $field }}"
                    data-mask="digits"
                    value="{{ $value }}"
                >
                <div class="input-group-prepend">
                    <span class="input-group-text">g/ml</span>
                </div>
            </div>
        </div>

        {{-- NET WEIGHT --}}
        <div class="mb-3 col-3">
            @php
                $field = 'net_weight';
                $class = 'form-control form-ingredient-input ingredient-extra-field imask';
                $info = old($field, '');
                $value = isset($entry) ? $entry->$field : $info;
            @endphp
            {{-- LABEL --}}
            <label for="{{ $field }}" class="form-label">
                {{ trans('crud.ingredient.steps.info.net_weight') }}
                <i class="las la-info-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.ingredient.steps.info.net_weight_info') }}"></i>
            </label>
            {{-- INPUT GROUP --}}
            <div class="input-group mb-3">
                <input
                    type="text"
                    class="{{ $class }}"
                    id="{{ $field }}"
                    name="{{ $field }}"
                    data-mask="digits"
                    value="{{ $value }}"
                >
                <div class="input-group-prepend">
                    <span class="input-group-text">g/ml</span>
                </div>
            </div>
        </div>

        {{-- LOSS --}}
        <div class="mb-3 col-3">
            @php
                $field = 'loss';
                $info = old($field, '');
                $value = isset($entry) ? $entry->$field : $info;
            @endphp
            {{-- LABEL --}}
            <label for="{{ $field }}" class="form-label">
                {{ trans('crud.ingredient.steps.info.loss') }}
                <i class="las la-info-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.ingredient.steps.info.loss_info') }}"></i>
            </label>
            {{-- INPUT GROUP --}}
            <div class="input-group mb-3">
                <input
                    type="number"
                    class="form-control form-ingredient-input"
                    id="{{ $field }}"
                    name="{{ $field }}"
                    value="{{ $value }}"
                >
                <div class="input-group-prepend">
                    <span class="input-group-text">g/ml</span>
                </div>
            </div>
        </div>

        {{-- PRICE PER KILO --}}
        <div class="mb-3 col-3">
            @php
                $field = 'price_kilo';
                $class = 'form-control form-ingredient-input ingredient-extra-field imask';
                $info = old($field, '');
                $value = isset($entry) ? $entry->$field : $info;

                if (!empty($value)) {
                    $value = number_format($value, 2, ',', '.');
                }
            @endphp
            {{-- LABEL --}}
            <label for="{{ $field }}" class="form-label">
                {{ trans('crud.ingredient.steps.info.price_kilo') }}
                <i class="las la-info-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.ingredient.steps.info.price_kilo_info') }}"></i>
            </label>
            {{-- INPUT GROUP --}}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="las la-dollar-sign"></i></span>
                </div>
                <input
                    readonly
                    type="text"
                    class="{{ $class }}"
                    data-mask="decimal"
                    id="{{ $field }}"
                    name="{{ $field }}"
                    value="{{ $value }}"
                >
            </div>
        </div>

         {{-- CORRECTION FACTOR --}}
         <div class="mb-3 col-3">
            @php
                $field = 'correction_factor';
                $class = 'form-control form-ingredient-input ingredient-extra-field imask';
                $info = old($field, '');
                $value = isset($entry) ? $entry->$field : $info;

                if (!empty($value)) {
                    $value = number_format($value, 2, ',', '.');
                }
            @endphp
            {{-- LABEL --}}
            <label for="{{ $field }}" class="form-label">
                {{ trans('crud.ingredient.steps.info.correction_factor') }}
                <i class="las la-info-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.ingredient.steps.info.correction_factor_info') }}"></i>
            </label>
            {{-- INPUT GROUP --}}
            <input
                type="text"
                class="{{ $class }}"
                data-mask="decimal"
                id="{{ $field }}"
                name="{{ $field }}"
                value="{{ $value }}"
            >
        </div>

        {{-- REVENUE --}}
        <div class="mb-3 col-3">
            @php
                $field = 'revenue';
                $class = 'form-control form-ingredient-input ingredient-extra-field imask';
                $info = old($field, '');
                $value = isset($entry) ? $entry->$field : $info;

                if (!empty($value)) {
                    $value = number_format($value, 2, ',', '.');
                }
            @endphp
            {{-- LABEL --}}
            <label for="{{ $field }}" class="form-label">
                {{ trans('crud.ingredient.steps.info.revenue') }}
                <i class="las la-info-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.ingredient.steps.info.revenue_info') }}"></i>
            </label>
            {{-- INPUT GROUP --}}
            <div class="input-group mb-3">
                <input
                    type="text"
                    class="{{ $class }}"
                    data-mask="decimal"
                    id="{{ $field }}"
                    name="{{ $field }}"
                    value="{{ $value }}"
                >
                <div class="input-group-prepend">
                    <span class="input-group-text">%</span>
                </div>
            </div>
        </div>

        {{-- PACKAGE --}}
        <div class="mb-3 col-3">              
            @php
                $field = 'package';
                $info = old($field, '');
                $value = isset($entry) ? $entry->$field : $info;
            @endphp
            {{-- LABEL --}}
            <label for="{{ $field }}" class="form-label">
                {{ trans('crud.ingredient.steps.info.package') }}
                <i class="las la-info-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('crud.ingredient.steps.info.package_info') }}"></i>
            </label>
            {{-- INPUT GROUP --}}
            <div class="input-group mb-3">
                <input
                    type="text"
                    class="form-control form-ingredient-input"
                    id="{{ $field }}"
                    name="{{ $field }}"
                    value="{{ $value }}"
                >
            </div>
        </div>
    </div>
</div>
{{-- END INPUTS --}}

{{-- ACTIONS --}}
<div class="d-flex justify-content-between align-items-center mt-5">
    <button type="button" class="btn btn-primary m-0 d-flex align-items-center" id="next-1">
        <span>{{ trans('crud.global.next_step') }}</span>
        <i class="las la-chevron-circle-right ml-2"></i>
    </button>

    <div class="need-help open-chat" title="{{ trans('crud.global.need_help') }}">
        <i class="las la-question-circle"></i>
    </div>
</div>

@push('after_scripts')
    @include(backpack_view('ingredient.crud.scripts.info_script'))
@endpush
