{{-- CLOSED STORAGE PLACE --}}
<div class="mb-3">
    @php
        $field = 'closed_storage_place';
        $info = old($field, '');
        $value = isset($entry) ? $entry->$field : $info;
    @endphp
    <label for="{{ $field }}" class="form-label">
        Local de armazenamento
    </label>
    <div class="storage-options" id="closed-storage-place">
        <div class="storage-option" data-reference="{{ $field }}" data-value="dry_fresh"><i class="las la-wind"></i> Seco e Fresco</div>
        <div class="storage-option" data-reference="{{ $field }}" data-value="sheltered_the_sun"><i class="las la-cloud-sun"></i> Ao abrigo do sol</div>
        <div class="storage-option" data-reference="{{ $field }}" data-value="refrigerator"><i class="las la-temperature-low"></i> Geladeira</div>
        <div class="storage-option" data-reference="{{ $field }}" data-value="freezer"><i class="lar la-snowflake"></i> Congelador</div>
        <div class="storage-option" data-reference="{{ $field }}" data-value="custom"><i class="las la-cog"></i> Personalizado</div>
    </div>

    {{-- INPUT HIDDEN --}}
    <input type="hidden" id="{{ $field }}" name="{{ $field }}" value="{{ $value }}">
</div>

{{-- CLOSED STORAGE TEMPERATURE --}}
<div class="mb-3">
    @php
        $field = 'closed_storage_temperature';
        $info = old($field, '');
        $value = isset($entry) ? $entry->$field : $info;
    @endphp
    <label for="{{ $field }}" class="form-label">
        Temperatura de armazenamento
    </label>
    <div class="storage-options" id="closed-storage-temperature">
        <div class="storage-option" data-reference="{{ $field }}" data-value="25"><i class="las la-temperature-high"></i> Até 25°C</div>
        <div class="storage-option" data-reference="{{ $field }}" data-value="5"><i class="las la-temperature-low"></i> 1 a 5°C</div>
        <div class="storage-option" data-reference="{{ $field }}" data-value="-18"><i class="lar la-snowflake"></i> -18°C</div>
        <div class="storage-option" data-reference="{{ $field }}" data-value="custom"><i class="las la-cog"></i> Personalizado</div>
    </div>

    {{-- INPUT HIDDEN --}}
    <input type="hidden" id="{{ $field }}" name="{{ $field }}" value="{{ $value }}">
</div>