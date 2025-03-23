<table class="table table-bordered table-striped" id="nutrtional-table">
    <thead>
        <tr>
            @php
                $field = 'portion';
                $info = old($field, 0);
                $value = isset($entry) ? $entry->$field : $info;
            @endphp
            <th colspan="2">{{ trans('crud.ingredient.steps.nutritional.portion_quantity') }} <span id="portion_finish" class="badge badge-success">{{ $value }}</span> g/ml</th>
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

                $value = isset($entry) ? $entry->nutritional_values[$field] : 0;

                if (!empty($value)) {
                    if (floor($value) != $value) {
                        $value = number_format($value, 2, ',', '.');
                    } else {
                        $value = number_format($value, 0, ',', '.');
                    }
                }
            @endphp
            <tr>
                <td>{{ $label }}</td>
                <td><span class="finish-info" id="nutritional_{{ $field }}_finish">{{ $value ?? 0 }}</span> {{ $measureName }}</td>
            </tr>
        @endforeach

        @php
            $optionalNutrients = App\Repositories\NutrientRepository::getOptionalNutrients();
            $nutritionalValues = isset($entry) ? $entry->nutritional_values : [];
        @endphp
    
    @foreach ($optionalNutrients as $nutrient)
        @php
            $field = $nutrient['name'];
            $label = $nutrient['label'];
            $measureName = $nutrient['measure_name'];
    
            $value = isset($nutritionalValues[$field]) ? $nutritionalValues[$field] : null;
        @endphp
    
        @if ($value !== null)
            <tr>
                <td>{{ $label }}</td>
                <td>
                    <span class="finish-info" id="nutritional_{{ $field }}_finish">
                        @if (!empty($value))
                            @if (floor($value) != $value) 
                                {{ number_format($value, 2, ',', '.') }}
                            @else
                                {{ number_format($value, 0, ',', '.') }}
                            @endif
                        @else
                            0
                        @endif
                    </span>
                    {{ $measureName }}
                </td>
            </tr>
        @endif
    @endforeach
    </tbody>
</table>