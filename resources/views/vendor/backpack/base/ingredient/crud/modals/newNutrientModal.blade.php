@push('after_styles')
	<style>
		.select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 38px !important;
        }

        .select2-container .select2-selection--single {
            height: 38px !important;
            border: 1px solid rgba(149, 189, 250, 0.12);
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 38px !important;
        }
	</style>
@endpush

<div class="modal fade" id="newNutrientModal" tabindex="-1" aria-labelledby="newNutrientModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      	<div class="modal-content">
			<!-- HEADER -->
			<div class="modal-header">
			<h5 class="modal-title" id="newNutrientModalLabel">{{ trans('crud.ingredient.steps.nutritional.modal_title') }}</h5>
			<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" aria-label="Close"><i class="las la-window-close"></i></button>
			</div>
			<!-- BODY -->
			<div class="modal-body">
				<div>
					{{-- NUTRIENTS SELECT --}}
					@php
						$field = 'new_nutrient_name';
						$list = \App\Repositories\NutrientRepository::getOptionalNutrients() ?? [];
					@endphp
					<label for="{{ $field }}" class="form-label">
						<b>{{ trans('crud.ingredient.steps.nutritional.modal_nutrient') }}</b>
					</label>
					<select id="{{ $field }}" class="form-control">
						@foreach ($list as $item)
							<option value="{{ data_get($item, 'name') }}" data-nutrient="{{ json_encode($item) }}">
								{{ data_get($item, 'label') }} - {{ data_get($item, 'measure') }}
							</option>
						@endforeach
					</select>

					{{-- NUTRIENT VALUE --}}
					@php
						$field = 'new_nutrient_value';
					@endphp
					<label for="{{ $field }}" class="form-label mt-3">
						<b>{{ trans('crud.ingredient.steps.nutritional.modal_value') }}</b>
					</label>
					<input type="text" id="{{ $field }}" class="form-control imask" data-mask="number">
				</div>
			</div>
        	<!-- FOOTER -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" id="btn-close-modal" data-dismiss="modal">{{ trans('crud.ingredient.steps.nutritional.modal_close') }}</button>
				<button type="button" class="btn btn-primary" id="btn-add-nutrient">{{ trans('crud.ingredient.steps.nutritional.modal_add') }}</button>
			</div>
      	</div>
    </div>
</div>

@push('after_scripts')
    <script>
		$(document).ready(function() {
			$('#new_nutrient_name').select2({
				dropdownParent: $('#newNutrientModal'),
				allowClear: true,
				placeholder: 'Select a nutrient'
			});
		});
    </script>
@endpush