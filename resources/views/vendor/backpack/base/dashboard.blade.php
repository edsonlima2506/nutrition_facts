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

        .dashboard-row {
            flex-wrap: nowrap;
            gap: 5px;
        }

        .footer {
            width: 100%;
            height: 70px;
            background-color: white
        }

        @media only screen and (max-width: 600px) {
            .dashboard-row {
                flex-wrap: wrap;
            }

            .navbar-brand {
                display: none !important;
            }

            .fc-toolbar {
                flex-direction: column;
            }
            
            .fc-view {
                font-size: 12px;
            }

            .fc-day-grid-event {
                font-size: 10px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="row mb-2"> 
            <h5>{{ trans('dashboard.greeting') }}, {{ backpack_user()->name }}!</h5>
        </div>

        {{-- Cards first row --}}
        <div class="row dashboard-row">
            {{-- RECIPES --}}
            <a href="" class="col-12 col-lg-4 p-3 info-container" style="background-color: #D8F2E9">
                <div class="d-flex align-items-center justify-content-between">
                    <h3>{{ trans('dashboard.recipes') }}</h3>
                    <i class="las la-concierge-bell"></i>
                </div>
                <h4 class="mt-2 font-weight-bold">12</h4>
            </a>

            {{-- INGREDIENTS --}}
            <a href="{{ backpack_url('ingredient') }}" class="col-12 col-lg-4 p-3 info-container" style="background-color: #D8F2E9">
                <div class="d-flex align-items-center justify-content-between">
                    <h3>{{ trans('dashboard.ingredients') }}</h3>
                    <i class="las la-bread-slice"></i>
                </div>
                <h4 class="mt-2 font-weight-bold">12</h4>
            </a>

            {{-- BEST SELLER --}}
            <a href="" class="col-12 col-lg-4 p-3 info-container" style="background-color: #D8F2E9">
                <div class="d-flex align-items-center justify-content-between">
                    <h3>{{ trans('dashboard.best_seller') }}</h3>
                    <i class="las la-trophy"></i>
                </div>
                <h4 class="mt-2 font-weight-bold">Pão de Queijo</h4>
            </a>
        </div>
        
        {{-- Cards second row --}}
        <div class="row mt-2 dashboard-row">
            {{-- PRODUCTION --}}
            <a href="" class="col-12 col-lg-4 p-3 info-container" style="background-color: #e3cdff">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="las la-industry"></i>
                        <h3 class="m-0 ml-2">{{ trans('dashboard.production') }}</h3>
                    </div>
                    <h3>10</h3>
                </div>
            </a>

            {{-- DELIVERIES --}}
            <a href="" class="col-12 col-lg-4 p-3 info-container" style="background-color: #e3cdff">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="las la-truck"></i>
                        <h3 class="m-0 ml-2">{{ trans('dashboard.deliveries') }}</h3>
                    </div>
                    <h3>10</h3>
                </div>
            </a>

            {{-- TUTORIAL --}}
            <a href="" class="col-12 col-lg-4 p-3 info-container" style="background-color: #e3cdff">
                <div class="d-flex align-items-center">
                    <i class="lab la-youtube"></i>
                    <h3 class="m-0 ml-2">{{ trans('dashboard.tutorial') }}</h3>
                </div>
            </a>
        </div>

        {{-- Calendar --}}
        <div class="row mt-5 mb-5 dashboard-row">
            <div class="col-12 col-md-8 p-0 bg-white p-4 rounded shadow">
                <div id="calendar"></div>
            </div>

            <div class="col-12 col-md-4 pl-1 pr-0 bg-white p-4 rounded shadow">
                <table style="width: 100%" class="table table-bordered table-striped">
                    <thead class="table-header">
                        <th ><i class="las la-clock"></i> {{ trans('dashboard.last_modifications') }}</th>
                    </thead>
                    <tbody>
                        @php
                            $companyId = backpack_user()->company_id;
                            $userId = backpack_user()->id;
                            
                            if($companyId) {
                                $histories = App\Models\History::companyId($companyId)
                                    ->latest()
                                    ->get()
                                    ->take(4);
                            } else {
                                $histories = App\Models\History::userId($userId)
                                    ->latest()
                                    ->get()
                                    ->take(4);
                            }
                        @endphp

                        @forelse ($histories as $history)
                            <tr>
                                <td>
                                    {{ App\Enum\HistoryOperation::from($history->operation)->getLabel() }}
                                    {{ trans("crud.{$history->entity}.singular") }} -
                                    {{ $history->entity_information }}
                                    <br>
                                    <i class="las la-user"></i> {{ optional($history->user)->name }}
                                    <br>
                                    <i class="las la-clock"></i> {{ Carbon\Carbon::parse($history->created_at)->format('d/m/Y H:i') }}
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="3">{{ trans('dashboard.no_history') }}</td></tr>
                        @endforelse
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
                initialView: 'dayGridMonth',
                windowResize: true
            });
            calendar.setOption('locale', locale.replace('_', '-'));
            calendar.render();
        });
    </script>
@endpush