@extends(backpack_view('blank'))

@push('after_styles')
    @include(backpack_view('base.recipe.crud.styles.create_style'))
@endpush

@push('after_scripts')
    @include(backpack_view('helpers.imask'))
@endpush

@php
    $breadcrumbs = [
        trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
        trans('menu.recipes.list') => backpack_url('recipe'),
        trans('menu.recipes.new') => false,
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
        <div class="col-md-12">
            <div class="wizard-steps justify-content-between d-none d-md-flex">
                {{-- INFO --}}
                <div id="step-1" class="wizard-step active">
                    <i class="las la-info"></i>
                    <span>{{ trans('crud.recipe.steps.info.title') }}</span>
                </div>
                {{-- Ingredient --}}
                <div id="step-2" class="wizard-step">
                    <i class="las la-poll-h"></i>
                    <span>{{ trans('crud.recipe.steps.ingredients.title') }}</span>
                </div>
                {{-- PREPARATION_METHOD --}}
                <div id="step-3" class="wizard-step">
                    <i class="las la-boxes"></i>
                    <span>{{ trans('crud.recipe.steps.preparation_method.title') }}</span>
                </div>
                {{-- FINANCIAL --}}
                <div id="step-4" class="wizard-step">
                    <i class="las la-allergies"></i>
                    <span>{{ trans('crud.recipe.steps.financial.title') }}</span>
                </div>
                
                {{-- FINISH --}}
                <div id="step-5" class="wizard-step">
                    <i class="las la-flag-checkered"></i>
                    <span>{{ trans('crud.recipe.steps.finish.title') }}</span>
                </div>
            </div>

            <form action="{{ route('recipe.store') }}" method="POST">
                @csrf
                {{-- INFO --}}
                <div id="step-content-1" class="wizard-content active">
                    @include(backpack_view('base.recipe.crud.tabs.info'))
                </div>

                 {{-- INGREDIENTS --}}
                 <div id="step-content-2" class="wizard-content">
                    @include(backpack_view('base.recipe.crud.tabs.ingredients'))
                </div>

                 {{-- PREPARATION METHOD --}}
                 <div id="step-content-3" class="wizard-content">
                    @include(backpack_view('base.recipe.crud.tabs.preparation_method'))
                </div>

                 {{-- FINANCIAL --}}
                 <div id="step-content-4" class="wizard-content">
                    @include(backpack_view('base.recipe.crud.tabs.financial'))
                </div>
            </form>
        </div>
    </div>
    
@endsection

@push('after_scripts')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

    @include(backpack_view('base.recipe.crud.modals.chat'))

    <script>
        $('.wizard-step').click(function() {
            var stepId = $(this).attr('id');
            var stepNumber = stepId.split('-')[1];

            $('.wizard-content').removeClass('active');

            $('#step-content-' + stepNumber).addClass('active');

            $('.wizard-step').removeClass('active');
            $(this).addClass('active');
        });


        $('#next-1').click(function() {
            $('#step-2').trigger('click');
        });
        $('#next-2').click(function() {
            $('#step-3').trigger('click');
        });
        $('#next-3').click(function() {
            $('#step-4').trigger('click');
        });
        $('#next-4').click(function() {
            $('#step-5').trigger('click');
        });
        


        $('#prev-2').click(function() {
            $('#step-1').trigger('click');
        });
        $('#prev-3').click(function() {
            $('#step-2').trigger('click');
        });
        $('#prev-4').click(function() {
            $('#step-3').trigger('click');
        });
        $('#prev-5').click(function() {
            $('#step-4').trigger('click');
        });

        $('.form-recipe-input').on('change', function() {
                let inputId = $(this).attr('id');
                
                $('#'+inputId+'_finish').html($(this).val());
            });

        $('.select2').select2();
    </script>
@endpush
