@push('after_styles')
    @include(backpack_view('base.ingredient.crud.styles.storage_style'))
@endpush

{{-- SUBTITLE --}}
<h4 class="step-subtitle">{{ trans('crud.ingredient.steps.storage.sub_title') }}</h4>
<a class="youtube-tutorial-link" href="#">
  <i class="lab la-youtube"></i>
  {{ trans('crud.global.tutorial') }}
</a>

{{-- INPUTS --}}
<div class="mb-5 mt-5">
    <div class="accordion" id="storageAccordion">
        {{-- CLOSED STORAGE --}}
        <div class="card mb-0">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="las la-box"></i>
                <b>{{ trans('crud.ingredient.steps.storage.closed_package_label') }}</b>
              </button>
            </h2>
          </div>      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#storageAccordion">
            <div class="card-body">
                @include(backpack_view('base.ingredient.crud.partials.storage_closed_fields'))
            </div>
          </div>
        </div>

        {{-- OPENED STORAGE --}}
        <div class="card mb-0">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="las la-box-open"></i>
                <b>{{ trans('crud.ingredient.steps.storage.opened_package_label') }}</b>
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#storageAccordion">
            <div class="card-body">
                @include(backpack_view('base.ingredient.crud.partials.storage_opened_fields'))
            </div>
          </div>
        </div>
    </div>
</div>

{{-- ACTIONS --}}
<div class="d-flex justify-content-between align-items-center mt-5">
    <button type="button" class="btn btn-primary m-0 d-flex align-items-center" id="next-3">
        <span>{{ trans('crud.global.next_step') }}</span>
        <i class="las la-chevron-circle-right ml-2"></i>
    </button>

    <div class="need-help open-chat" title="{{ trans('crud.global.need_help') }}">
        <i class="las la-question-circle"></i>
    </div>
</div>

@push('after_scripts')
    @include(backpack_view('base.ingredient.crud.scripts.storage_script'))
@endpush