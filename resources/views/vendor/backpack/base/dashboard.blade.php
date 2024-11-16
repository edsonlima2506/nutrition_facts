@extends(backpack_view('blank'))

@push('after_styles')
    <style>
        .info-container {
            border-radius: 10px;
        }

        .info-container h3 {
            font-size: 20px;
            font-weight: 600;
            margin: 0;
        }

        .info-container i {
            font-size: 25px;
            font-weight: 600;
        }

        a, a:hover {
            text-decoration: none;
            color: inherit;
        }

        .table-header {
            width: 100%;
            background-color: #334257;
            color: #ffffff;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="row mb-2"> 
            <h5>{{ trans('dashboard.greeting') }}, {{ backpack_user()->name }}!</h5>
        </div>

        {{-- Cards first row --}}
        <div class="row" style="flex-wrap: nowrap; gap: 5px">
            <a href="" class="col-12 col-lg-4 p-3 info-container" style="background-color: #D8F2E9">
                <div class="d-flex align-items-center justify-content-between">
                    <h3>{{ trans('dashboard.recipes') }}</h3>
                    <i class="las la-concierge-bell"></i>
                </div>
                <h4 class="mt-2 font-weight-bold">12</h4>
            </a>

            <a href="" class="col-12 col-lg-4 p-3 info-container" style="background-color: #D8F2E9">
                <div class="d-flex align-items-center justify-content-between">
                    <h3>{{ trans('dashboard.ingredients') }}</h3>
                    <i class="las la-bread-slice"></i>
                </div>
                <h4 class="mt-2 font-weight-bold">12</h4>
            </a>

            <a href="" class="col-12 col-lg-4 p-3 info-container" style="background-color: #D8F2E9">
                <div class="d-flex align-items-center justify-content-between">
                    <h3>{{ trans('dashboard.best_seller') }}</h3>
                    <i class="las la-trophy"></i>
                </div>
                <h4 class="mt-2 font-weight-bold">Pão de Queijo</h4>
            </a>
        </div>
        
        {{-- Cards second row --}}
        <div class="row mt-2" style="flex-wrap: nowrap; gap: 5px">
            <a href="" class="col-12 col-lg-4 p-3 info-container" style="background-color: #e3cdff">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="las la-industry"></i>
                        <h3 class="m-0 ml-2">{{ trans('dashboard.production') }}</h3>
                    </div>
                    <h3>10</h3>
                </div>
            </a>
            <a href="" class="col-12 col-lg-4 p-3 info-container" style="background-color: #e3cdff">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="las la-truck"></i>
                        <h3 class="m-0 ml-2">{{ trans('dashboard.deliveries') }}</h3>
                    </div>
                    <h3>10</h3>
                </div>
            </a>
            <a href="" class="col-12 col-lg-4 p-3 info-container" style="background-color: #e3cdff">
                <div class="d-flex align-items-center">
                    <i class="lab la-youtube"></i>
                    <h3 class="m-0 ml-2">{{ trans('dashboard.tutorial') }}</h3>
                </div>
            </a>
        </div>

        {{-- Calendar --}}
        <div class="row mt-5 mb-5" style="flex-wrap: nowrap; gap: 5px">
            <div class="col-12 col-md-8 p-0 bg-white p-4 rounded shadow">
                <div id="calendar"></div>
            </div>

            <div class="col-12 col-md-4 pl-1 pr-0 bg-white p-4 rounded shadow">
                <table style="width: 100%" class="table table-bordered table-striped">
                    <thead class="table-header">
                        <th ><i class="las la-clock"></i> {{ trans('dashboard.last_modifications') }}</th>
                    </thead>
                    <tbody>
                        <tr><td>Teste</td></tr>
                        <tr><td>Teste</td></tr>
                        <tr><td>Teste</td></tr>
                        <tr><td>Teste</td></tr>
                        <tr><td>Teste</td></tr>
                        <tr><td>Teste</td></tr>
                        <tr><td>Teste</td></tr>
                        <tr><td>Teste</td></tr>
                        <tr><td>Teste</td></tr>
                        <tr><td>Teste</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@php
    $locale = app()->getLocale();
@endphp

@push('after_scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    
    <script>
        var locale = @json($locale);

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.setOption('locale', locale.replace('_', '-'));
            calendar.render();
        });
    </script>
@endpush