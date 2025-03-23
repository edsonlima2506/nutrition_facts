@push('after_styles')
    <style>
        .select2, .select2-container, .select2-container--default {
            width: unset !important; flex-grow: 1
        }
    </style>
@endpush

{{-- SUBTITLE --}}
<h4 class="step-subtitle">{{ trans('crud.ingredient.steps.allergens.sub_title') }}</h4>
<a class="youtube-tutorial-link" href="#">
    <i class="lab la-youtube"></i>
    {{ trans('crud.global.tutorial') }}
</a>

{{-- INPUTS --}}
<div class="mb-5 mt-5">
    {{-- GLUTEN --}}
    <div class="mb-3">
        @php
            $field = 'ingredient_gluten';
            $info = old($field, false);
            $value = isset($entry) ? $entry->$field : $info;
        @endphp
        <label for="{{ $field }}">
            <b>{{ trans('enum.allergensOption.gluten') }}</b>
        </label>

        <div class="radios">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="{{ $field }}" id="{{ $field }}_1" value="contain" {{ $value == 'contain' ? 'checked' : '' }}>
                <label class="form-check-label" for="{{ $field }}_1">{{ trans('enum.allergensOption.options.contain') }}</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="{{ $field }}" id="{{ $field }}_2" value="doesnt_contain" {{ $value == 'doesnt_contain' ? 'checked' : '' }}>
                <label class="form-check-label" for="{{ $field }}_2">{{ trans('enum.allergensOption.options.doesnt_contain') }}</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="{{ $field }}" id="{{ $field }}_3" value="undeclared" {{ $value == 'undeclared' ? 'checked' : '' }}>
                <label class="form-check-label" for="{{ $field }}_3">{{ trans('enum.allergensOption.options.undeclared') }}</label>
            </div>
        </div>
    </div>

    {{-- LACTOSE --}}
    <div class="mb-3">
        @php
            $field = 'ingredient_lactose';
            $info = old($field, false);
            $value = isset($entry) ? $entry->$field : old($field);
        @endphp
        <label for="{{ $field }}">
            <b>{{ trans('enum.allergensOption.lactose') }}</b>
        </label>

        <div class="radios">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="{{ $field }}" id="{{ $field }}_1" value="contain" {{ $value == 'contain' ? 'checked' : '' }}>
                <label class="form-check-label" for="{{ $field }}_1">{{ trans('enum.allergensOption.options.contain') }}</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="{{ $field }}" id="{{ $field }}_2" value="doesnt_contain" {{ $value == 'doesnt_contain' ? 'checked' : '' }}>
                <label class="form-check-label" for="{{ $field }}_2">{{ trans('enum.allergensOption.options.doesnt_contain') }}</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="{{ $field }}" id="{{ $field }}_3" value="low_content" {{ $value == 'low_content' ? 'checked' : '' }}>
                <label class="form-check-label" for="{{ $field }}_3">{{ trans('enum.allergensOption.options.low_content') }}</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="{{ $field }}" id="{{ $field }}_4" value="undeclared" {{ $value == 'undeclared' ? 'checked' : '' }}>
                <label class="form-check-label" for="{{ $field }}_4">{{ trans('enum.allergensOption.options.undeclared') }}</label>
            </div>
        </div>
    </div>
    
    {{-- ALLERGENS LIST --}}
    @php
        $options = App\Repositories\IngredientRepository::getAllergensOptions();
    @endphp

    {{-- ALLERGENS --}}
    @php
        $field = 'ingredient_allergens';
        $info = old($field, []);
        $value = isset($entry) ? $entry->$field ?? [] : $info;
    @endphp
    <label for="{{ $field }}" class="form-label">
        {{ trans('crud.ingredient.steps.allergens.contain') }}
    </label>
    <div class="input-group mb-3">
        <select class="custom-select select2-multiple" multiple="multiple" id="{{ $field }}" name="{{ $field }}[]">
            @foreach ($options as $key => $option)
                <option value="{{ $key }}" @if(in_array($key, (array) $value)) selected @endif>{{ $option }}</option>
            @endforeach
        </select>

        {{-- HAS DERIVATES --}}
        @php
            $field = 'ingredient_allergens_has_derivatives';
            $info = old($field, false);
            $value = isset($entry) ? $entry->$field : $info;
        @endphp
        <div class="input-group-append">
            <span class="input-group-text">
                <input type="checkbox" class="mr-2" name="{{ $field }}" id="{{ $field }}" @if($value) checked @endif>
                <span>{{ trans('crud.ingredient.steps.allergens.derivatives') }}</span>
            </span>
        </div>
    </div>

    {{-- DERIVATIVES ALLERGENS --}}
    @php
        $field = 'ingredient_allergens_derivatives';
        $info = old($field, []);
        $value = isset($entry) ? $entry->$field ?? [] : $info;
    @endphp
    <label for="{{ $field }}" class="form-label">
        {{ trans('crud.ingredient.steps.allergens.allergens_derivatives') }}
    </label>
    <div class="mb-3">
        <select class="custom-select select2-multiple" multiple="multiple" id="{{ $field }}" name="{{ $field }}[]">
            @foreach ($options as $key => $option)
                <option value="{{ $key }}" @if(in_array($key, (array) $value)) selected @endif>{{ $option }}</option>
            @endforeach
        </select>
    </div>

    {{-- MAY CONTAIN ALLERGENS --}}
    @php
        $field = 'ingredient_allergens_maycontain';
        $info = old($field, []);
        $value = isset($entry) ? $entry->$field ?? [] : $info;
    @endphp
    <label for="{{ $field }}" class="form-label">
        {{ trans('crud.ingredient.steps.allergens.maycontain') }}
    </label>
    <div class="mb-3">
        <select class="custom-select select2-multiple" multiple="multiple" id="{{ $field }}" name="{{ $field }}[]">
            @foreach ($options as $key => $option)
                <option value="{{ $key }}" @if(in_array($key, (array) $value)) selected @endif>{{ $option }}</option>
            @endforeach
        </select>
    </div>

    @php
        $field = 'seccondary_ingredients';
        $info = old($field, []);
        $value = isset($entry) ? $entry->$field ?? [] : $info;
    @endphp
    <label for="{{ $field }}" class="form-label">
        {{ trans('crud.ingredient.steps.allergens.ingredients') }}
    </label>
    <div class="mb-3">
        <select class="custom-select select2-multiple" multiple="multiple" id="{{ $field }}" name="{{ $field }}[]">
            @foreach ($value as $option)
                <option value="{{ $option }}" selected>{{ $option }}</option>
            @endforeach
        </select>
    </div>
</div>
{{-- INPUTS END --}}

{{-- ACTIONS --}}
<div class="d-flex justify-content-between align-items-center flex-wrap">
    <div class="d-flex">
        <button type="button" class="btn btn-secondary mt-0" id="prev-4">
            {{ trans('crud.global.back') }}
        </button>

        <button type="button" class="btn btn-primary ml-2 d-flex align-items-center" id="next-4">
            <span>{{ trans('crud.global.next_step') }}</span>
            <i class="las la-chevron-circle-right ml-2"></i>
        </button>
    </div>

    <div class="need-help open-chat" title="{{ trans('crud.global.need_help') }}">
        <i class="las la-question-circle"></i>
    </div>
</div>

{{-- SCRIPT --}}
@push('after_scripts')
    @include(backpack_view('base.ingredient.crud.scripts.allergens_script'))
@endpush
