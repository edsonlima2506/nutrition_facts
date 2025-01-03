{{-- OPENED STORAGE PLACE --}}
<div class="mb-3">
    @php
        $field = 'opened_storage_place';
        $info = old($field, '[]');
        $value = isset($entry) ? json_encode($entry->$field) : $info;

        $selectedArray = isset($entry) ? $entry->$field : old($field, []);
    @endphp
    <label for="{{ $field }}" class="form-label">
        {{ trans('crud.ingredient.steps.storage.storage_place') }}
    </label>
    <div class="storage-options" id="opened-storage-place">
        <div class="storage-option @if(in_array('dry_fresh', $selectedArray)) selected @endif" data-reference="{{ $field }}" data-value="dry_fresh">
            <i class="las la-wind"></i> {{ trans('crud.ingredient.steps.storage.dry_fresh') }}
        </div>
        
        <div class="storage-option @if(in_array('sheltered_the_sun', $selectedArray)) selected @endif" data-reference="{{ $field }}" data-value="sheltered_the_sun">
            <i class="las la-cloud-sun"></i> {{ trans('crud.ingredient.steps.storage.sheltered_the_sun') }}
        </div>
        
        <div class="storage-option @if(in_array('refrigerator', $selectedArray)) selected @endif" data-reference="{{ $field }}" data-value="refrigerator">
            <i class="las la-temperature-low"></i> {{ trans('crud.ingredient.steps.storage.refrigerator') }}
        </div>
        
        <div class="storage-option @if(in_array('freezer', $selectedArray)) selected @endif" data-reference="{{ $field }}" data-value="freezer">
            <i class="lar la-snowflake"></i> {{ trans('crud.ingredient.steps.storage.freezer') }}
        </div>
        
        <div class="storage-option @if(in_array('custom', $selectedArray)) selected @endif" data-reference="{{ $field }}" data-value="custom">
            <i class="las la-cog"></i> {{ trans('crud.ingredient.steps.storage.custom') }}
        </div>
    </div>

    {{-- INPUT HIDDEN --}}
    <input type="hidden" id="{{ $field }}" name="{{ $field }}" value="{{ $value }}">

    {{-- INPUT CUSTOM --}}
    <input type="text" class="d-none form-control mt-2" id="{{ $field }}_custom" name="{{ $field }}_custom">
</div>

{{-- OPENED STORAGE TEMPERATURE --}}
<div class="mb-3">
    @php
        $field = 'opened_storage_temperature';
        $info = old($field, '[]');
        $value = isset($entry) ? json_encode($entry->$field) : $info;

        $selectedArray = isset($entry) ? $entry->$field : old($field, []);
    @endphp
    <label for="{{ $field }}" class="form-label">
        {{ trans('crud.ingredient.steps.storage.storage_temperature') }}
    </label>
    <div class="storage-options" id="opened-storage-temperature">
        <div class="storage-option @if(in_array('room_temperature', $selectedArray)) selected @endif" data-reference="{{ $field }}" data-value="room_temperature"><i class="las la-temperature-high"></i> {{ trans('crud.ingredient.steps.storage.room_temperature.celsius') }}</div>
        <div class="storage-option @if(in_array('refrigerated', $selectedArray)) selected @endif" data-reference="{{ $field }}" data-value="refrigerated"><i class="las la-temperature-low"></i> {{ trans('crud.ingredient.steps.storage.refrigerated.celsius') }}</div>
        <div class="storage-option @if(in_array('frozen', $selectedArray)) selected @endif" data-reference="{{ $field }}" data-value="frozen"><i class="lar la-snowflake"></i> {{ trans('crud.ingredient.steps.storage.frozen.celsius') }}</div>
        <div class="storage-option @if(in_array('custom', $selectedArray)) selected @endif" data-reference="{{ $field }}" data-value="custom"><i class="las la-cog"></i> {{ trans('crud.ingredient.steps.storage.custom') }}</div>
    </div>

    {{-- INPUT HIDDEN --}}
    <input type="hidden" id="{{ $field }}" name="{{ $field }}" value="{{ $value }}">

    {{-- INPUT CUSTOM --}}
    <input type="text" class="d-none form-control mt-2" id="{{ $field }}_custom" name="{{ $field }}_custom">
</div>