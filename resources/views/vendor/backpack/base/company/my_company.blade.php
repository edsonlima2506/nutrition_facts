@extends(backpack_view('blank'))

@section('after_styles')
    <style media="screen">
        .backpack-profile-form .required::after {
            content: ' *';
            color: red;
        }
    </style>
@endsection

@php
    $breadcrumbs = [
        trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
        trans('menu.my_company') => false,
    ];

    $patterns = App\Enum\CompanyPattern::labels() ?? [];
@endphp

@section('header')
    <section class="content-header">
        <div class="container-fluid mb-3">
            <h1>{{ trans('menu.my_company') }}</h1>
        </div>
    </section>
@endsection

@section('content')
    <div class="row">

        @if (session('success'))
            <div class="col-lg-8">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @if ($errors->count())
        <div class="col-lg-8">
            <div class="alert alert-danger">
                <ul class="mb-1">
                    @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        {{-- UPDATE INFO FORM --}}
        <div class="col-lg-8">
            <form class="form" action="{{ route('company.my_company.update', ['company' => $company]) }}" method="post">

                {!! csrf_field() !!}

                <div class="card padding-10">

                    <div class="card-body backpack-profile-form bold-labels">
                        <div class="row">
                            {{-- NAME --}}
                            <div class="col-md-6 form-group">
                                @php
                                    $label = trans('crud.company.fields.name');
                                    $field = 'name';
                                @endphp
                                <label class="required">{{ $label }}</label>
                                <input required class="form-control" type="text" name="{{ $field }}" value="{{ old($field) ? old($field) : $company->$field }}">
                            </div>

                            {{-- PATTERN --}}
                            <div class="col-md-6 form-group">
                                @php
                                    $label = trans('crud.company.fields.pattern');
                                    $field = 'pattern';
                                    $value = old($field) ? old($field) : $company->$field
                                @endphp
                                <label class="required">{{ $label }}</label>
                                <select name="{{ $field }}" id="{{ $field }}" required class="form-control">
                                    @foreach ($patterns as $key => $pattern)
                                        <option value="{{ $key }}" @if ($key == $value) selected @endif>{{ $pattern }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            {{-- COUNTRY --}}
                            <div class="col-md-6 form-group">
                                @php
                                    $label = trans('crud.company.fields.country');
                                    $field = 'country';
                                @endphp
                                <label>{{ $label }}</label>
                                <input class="form-control" type="text" name="{{ $field }}" value="{{ old($field) ? old($field) : $company->$field }}">
                            </div>

                            {{-- CITY --}}
                            <div class="col-md-3 form-group">
                                @php
                                    $label = trans('crud.company.fields.city');
                                    $field = 'city';
                                @endphp
                                <label>{{ $label }}</label>
                                <input class="form-control" type="text" name="{{ $field }}" value="{{ old($field) ? old($field) : $company->$field }}">
                            </div>

                            {{-- STATE --}}
                            <div class="col-md-3 form-group">
                                @php
                                    $label = trans('crud.company.fields.state');
                                    $field = 'state';
                                @endphp
                                <label>{{ $label }}</label>
                                <input class="form-control" type="text" name="{{ $field }}" value="{{ old($field) ? old($field) : $company->$field }}">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"><i class="la la-save"></i> {{ trans('backpack::base.save') }}</button>
                        <a href="{{ backpack_url() }}" class="btn">{{ trans('backpack::base.cancel') }}</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
