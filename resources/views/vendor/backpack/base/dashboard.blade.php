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

        .padding{
            padding-left: 10vh!important;
            padding-right: 10vh!important;
        }
        @media only screen and (min-width: 2000px){
            .padding{
                padding-left: 20vh!important;
                padding-right: 20vh!important;
            }
        }

        ..modal-backdrop {
    z-index: 1040 !important;  /* Camada de fundo */
}

.modal-dialog {
    z-index: 1050 !important;  /* O modal em si */
}

    </style>
@endpush

@section('content')
    <div class="container-fluid padding">
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

    <div class="modal fade" id="newOrder" tabindex="-1" role="dialog" aria-labelledby="newOrderLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newOrderLabel"><i class="las la-plus"></i> {{ trans('crud.order.singular') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-create-agendamento">
                        @csrf
                        <div class="form-group">
                            <label for="recipe_id">{{ trans('crud.order.fields.recipe_id') }}</label>
                            <select name="recipe_id" id="recipe_id" class="form-control">
                                @foreach ($recipes as $id => $recipe)
                                    <option value="{{ $id }}"> {{ $recipe }}</option>
                                @endforeach
                                <!-- Adicionar opções de receitas aqui -->
                            </select>
                        </div>
    
                        <div class="form-group d-none">
                            <label for="start">{{ trans('crud.order.fields.start') }}</label>
                            <input type="hidden" name="start" id="start" class="form-control">
                        </div>
                        
    
                        <div class="form-group">
                            <label for="finish">{{ trans('crud.order.fields.finish') }}</label>
                            <input type="date" name="finish" id="finish" class="form-control">
                        </div>
    
                        <div class="form-group">
                            @if (backpack_user()->hasRole('super_admin'))
                                <label for="user_id">{{ trans('crud.order.fields.user_id') }}</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    @foreach ($users as $id => $user)
                                        <option value="{{ $id }}">{{ $user }}</option>
                                    @endforeach
                                </select>
                            @else
                                <input type="hidden" name="user_id" id="user_id" value="{{ backpack_user()->company_id }}">        
                            @endif
                        </div>
    
                        <div class="form-group">
                            <label for="quantity">{{ trans('crud.order.fields.quantity') }}</label>
                            <input type="number" name="quantity" id="quantity" class="form-control">
                        </div>
    
                        <div class="form-group">
                            <label for="final_weight">{{ trans('crud.order.fields.final_weight') }}</label>
                            <input type="number" name="final_weight" id="final_weight" class="form-control">
                        </div>
    
                        <div class="form-group">
                            <label for="fractionation">{{ trans('crud.order.fields.fractionation') }}</label>
                            <input type="number" name="fractionation" id="fractionation" class="form-control">
                        </div>
    
                        <div class="form-group">
                            <label for="purpose">{{ trans('crud.order.fields.purpose') }}</label>
                            <input type="text" name="purpose" id="purpose" class="form-control">
                        </div>
    
                        <div class="form-group">
                            <label for="obs">{{ trans('crud.order.fields.obs') }}</label>
                            <textarea name="obs" id="obs" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="cancelCrop" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="submitForm">Salvar</button>
                </div>
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
        var orders = @json($orders);

        $(document).ready(function() {
            $('#submitForm').on('click', function(e) {
                e.preventDefault(); // Previne o envio normal do formulário

                // Fazer a tradução desse ajax-e desse arquivo

                // Envia o formulário via AJAX
                $.ajax({
                    url: "{{ backpack_url('order/dashboard/store') }}", // A rota do CRUD do Backpack
                    type: 'POST',
                    data: $('#form-create-agendamento').serialize(),
                    success: function(response) {
                        if (response.success) {
                            // Fechar o modal
                            $('#newOrder').modal('hide');

                            // Exibir notificação de sucesso
                            new Noty({
                                type: 'success',
                                layout: 'topRight',
                                text: 'Pedido criado com sucesso!',
                                timeout: 3000, // 3 segundos
                                progressBar: true,
                            }).show();

                            // Adicionar a order no calendário ou na interface
                            const event = {
                                id: response.order.id, // ID único do evento
                                title: response.order.recipe_name, // Nome ou descrição do evento
                                start: response.order.start, // Data de início (YYYY-MM-DD)
                                end: response.order.finish || response.order.start, // Data de fim ou mesmo que início
                                color: '#28a745', // Cor do evento (opcional)
                            };

                            // Atualizar calendário (exemplo usando FullCalendar)
                            calendar.addEvent(event);

                        } else {
                            // Exibir erro, caso haja
                            alert('Erro ao salvar. Tente novamente.');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Exibir erros de validação ou falhas
                        console.log(error)
                        alert('Erro no envio. Tente novamente. ' + error);
                    }
                });
            });
        });


        
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var firstLoad = true;

            window.calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: locale.replace('_', '-'),
                events: orders.map(function(order) {
                    return {
                        title: order.recipe.name, 
                        start: order.start, 
                        end: order.finish,
                        url: '/admin/order/' + order.id + '/show'
                    };
                }),
                datesSet: function(info) {
                    // Pegamos o dia central da visualização atual para calcular o mês e o ano corretos
                    const viewDate = new Date(info.start.getTime() + (info.end.getTime() - info.start.getTime()) / 2);
                    const currentYear = viewDate.getFullYear();
                    const currentMonth = viewDate.getMonth() + 1; // Janeiro é 0, por isso somamos 1

                    if (!firstLoad) {

                        calendar.removeAllEvents();

                        loadEventsForMonth(currentYear, currentMonth);
                    }
                    firstLoad = false;
                },
                dateClick: function(info){
                    $('#newOrder').modal({
                        backdrop: false,
                        keyboard: false,
                    });
                    document.getElementById('start').value = info.dateStr;

                }
            });

            calendar.render();

            function addEvent(eventTitle, eventTime) {
                    calendar.addEvent({
                        title: eventTitle,
                        start: selectedDate + 'T' + eventTime,
                        allDay: false
                    });
                    // $("#eventModal").modal('show');

                    jQuery.noConflict();
                    $('#eventModal').modal({
                        backdrop: false,
                        keyboard: false,
                    });
                }
    
                $('.event-button').on('click', function() {
                    var eventTitle = $(this).data('title');
                    var eventTime = $(this).data('time');
                    addEvent(eventTitle, eventTime);
                });
        });

        // Metodo para carregar eventos de outro mês via AJAX
        function loadEventsForMonth(year, month) {
            let route = "{{ backpack_url('order/events') }}"
            $.ajax({
                url: route,
                 data: {
                    year: year,
                    month: month,
                },
                success: function(response) {
                    calendar.addEventSource(response.map(order => 
                        ({
                            title: order.recipe.name,
                            start: order.start,
                            end: order.finish,
                            url: '/admin/order/' + order.id + '/show'
                        })

                    ));
                },
                error: function(xhr, status, error) {
                    console.error("Erro ao carregar os eventos:", error);
                }
            });
        }
    </script>
@endpush