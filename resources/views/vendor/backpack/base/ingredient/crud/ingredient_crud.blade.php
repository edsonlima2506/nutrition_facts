@extends(backpack_view('blank'))

@push('after_styles')
    @include(backpack_view('base.ingredient.crud.styles.create_style'))
@endpush

@push('after_scripts')
    @include(backpack_view('helpers.imask'))
    @include(backpack_view('base.ingredient.crud.modals.newNutrientModal'))
@endpush

@php
    $breadcrumbs = [
        trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
        trans('menu.ingredients.list') => backpack_url('ingredient'),
        trans('menu.ingredients.new') => false,
    ];
@endphp

@section('content')
    @section('header')
        <section class="container-fluid">
        <h2>
            <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
            <small>{!! $crud->getSubheading() ?? trans('backpack::crud.add').' '.$crud->entity_name !!}.</small>

            @if ($crud->hasAccess('list'))
            <small><a href="{{ url($crud->route) }}" class="d-print-none font-sm"><i class="la la-angle-double-{{ config('backpack.base.html_direction') == 'rtl' ? 'right' : 'left' }}"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a></small>
            @endif
        </h2>
        </section>
    @endsection

    {{-- Request Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container-fluid bg-white p-4 rounded shadow mt-1 mb-2">
        <div class="row">
            <div class="col-md-12">
                <div class="wizard-steps justify-content-between d-none d-md-flex">
                    {{-- INFO --}}
                    <div id="step-1" class="wizard-step active">
                        <i class="las la-info"></i>
                        <span>{{ trans('crud.ingredient.steps.info.title') }}</span>
                    </div>
                    {{-- NUTRITIONAL --}}
                    <div id="step-2" class="wizard-step">
                        <i class="las la-poll-h"></i>
                        <span>{{ trans('crud.ingredient.steps.nutritional.title') }}</span>
                    </div>
                    {{-- STORAGE --}}
                    <div id="step-3" class="wizard-step">
                        <i class="las la-boxes"></i>
                        <span>{{ trans('crud.ingredient.steps.storage.title') }}</span>
                    </div>
                    {{-- ALLERGENS --}}
                    <div id="step-4" class="wizard-step">
                        <i class="las la-allergies"></i>
                        <span>{{ trans('crud.ingredient.steps.allergens.title') }}</span>
                    </div>
                    {{-- FINISH --}}
                    <div id="step-5" class="wizard-step">
                        <i class="las la-flag-checkered"></i>
                        <span>{{ trans('crud.ingredient.steps.finish.title') }}</span>
                    </div>
                </div>
    
                @php
                    if ($crud->getCurrentOperation() == 'create') {
                        $url = url($crud->route);
                    } elseif ($crud->getCurrentOperation() == 'show') {
                        $typeShow = true;
                        $url = '#';
                    } else {
                        $typeEdit = true;
                        $url = url($crud->route.'/'.$entry->getKey());
                    }
                @endphp
                <form action="{{ $url }}" method="post">
                    @csrf
                    @if (isset($typeEdit))
                        {!! method_field('PUT') !!}
                    @endif
                    {{-- INFO --}}
                    <div id="step-content-1" class="wizard-content active">
                        @include(backpack_view('base.ingredient.crud.tabs.info'))
                    </div>
                    {{-- NUTRITIONAL --}}
                    <div id="step-content-2" class="wizard-content">
                        @include(backpack_view('base.ingredient.crud.tabs.nutritional'))
                    </div>
                    {{-- STORAGE --}}
                    <div id="step-content-3" class="wizard-content">
                        @include(backpack_view('base.ingredient.crud.tabs.storage'))
                    </div>
                    {{-- ALLERGENS --}}
                    <div id="step-content-4" class="wizard-content">
                        @include(backpack_view('base.ingredient.crud.tabs.allergens'))
                    </div>
                    {{-- FINISH --}}
                    <div id="step-content-5" class="wizard-content">
                        @include(backpack_view('base.ingredient.crud.tabs.finish'))
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('after_scripts')
    @include(backpack_view('base.ingredient.crud.scripts.crud_script'))
@endpush