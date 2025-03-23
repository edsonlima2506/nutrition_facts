@push('after_styles')
    @include(backpack_view('base.recipe.crud.styles.finacial_style'))
@endpush

<!-- SUBTITLE -->
<h4 class="step-subtitle">{{ trans('crud.recipe.steps.financial.sub_title') }}</h4>
<div class="youtube-tutorial-link">
    <p><i class="lab la-youtube"></i> Tutorial</p>
</div>

<div class="financial-container w-100 d-flex flex-row justify-content-center">
    
    <div class="financial-content-wrapper w-100 d-flex justify-content-between" style="max-width: 1500px; padding: 20px;">

        <div class="financial-column w-50" style="padding-right: 20px;">
           
            <div class="financial-steps-container">
               
                <div class="financial-step w-48" onclick="toggleStep('step-1')">
                    <h5>Custo Total</h5>
                </div>

                <!-- Step 2: Custo Unitário -->
                <div class="financial-step w-48" onclick="toggleStep('step-2')">
                    <h5>Custo Unitário</h5>
                </div>
            </div>

           
            <div class="financial-step-content step-1 active">
                <div class="financial-cards">
                    
                    <div class="financial-card">
                        <div class="card-column">
                            <h6>Ingredientes</h6>
                            <span>R$ 0,00</span>
                        </div>
                        <div class="card-column">
                            <h6>CMV</h6>
                            <span>0%</span>
                        </div>
                    </div>

                    
                    <div class="financial-card">
                        <div class="card-column">
                            <h6>Custo Direto</h6>
                            <span>R$ 0,00</span>
                        </div>
                        <div class="card-column">
                            <h6>Imagem</h6>
                            <span>Imagem</span>
                        </div>
                    </div>

                    
                    <div class="financial-card">
                        <div class="card-column">
                            <h6>Custo Indireto</h6>
                            <span>R$ 0,00</span>
                        </div>
                        <div class="card-column">
                            <h6>Imagem</h6>
                            <span>Imagem</span>
                        </div>
                    </div>
                </div>
            </div>

           
            <div class="financial-step-content step-2">
                <div class="financial-cards">
                    <div class="financial-card">
                        <div class="card-column">
                            <h6>Ingredientes</h6>
                            <span>R$ 0,00</span>
                        </div>
                        <div class="card-column">
                            <h6>CMV</h6>
                            <span>0%</span>
                        </div>
                    </div>

                    <div class="financial-card">
                        <div class="card-column">
                            <h6>Custo Direto</h6>
                            <span>R$ 0,00</span>
                        </div>
                        <div class="card-column">
                            <h6>Imagem</h6>
                            <span>Imagem</span>
                        </div>
                    </div>

                    <div class="financial-card">
                        <div class="card-column">
                            <h6>Custo Indireto</h6>
                            <span>R$ 0,00</span>
                        </div>
                        <div class="card-column">
                            <h6>Imagem</h6>
                            <span>Imagem</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pricing-column w-50" style="padding-left: 20px; display: flex; flex-direction: column; height: 100%;">

            <div class="pricing-step" style="flex: 1; display: flex; flex-direction: column; padding-right: 20px;">
                <h5>Preço de Venda</h5>
                <label for="profit-bar">Lucro: </label>
                <input type="range" id="profit-bar" min="0" max="100" value="0" class="progress-bar">
            </div>

            <div class="pricing-step" style="flex: 2; display: flex; justify-content: space-between; padding-top: 20px; height: 100%;">
                <div class="pricing-summary" style="flex: 0; padding-right: 10px;">
                    <span><strong>Lucro:</strong> R$ 0,00</span>
                    <span><strong>Ingredientes:</strong> R$ 0,00</span>
                    <span><strong>Custo Direto:</strong> R$ 0,00</span>
                    <span><strong>Custo Indireto:</strong> R$ 0,00</span>
                </div>

                <div class="pricing-summary" style="flex: 2; padding: 0; display: flex; justify-content: center; align-items: center;">
                    <canvas id="doughnut-chart" style="height: 70%; width: 70%;"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Script do gráfico Doughnut -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('doughnut-chart').getContext('2d');
    var doughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Lucro', 'Ingredientes', 'Custo Direto', 'Custo Indireto'],
            datasets: [{
                data: [30, 40, 20, 10],
                backgroundColor: ['#ff9999', '#66b3ff', '#99ff99', '#ffcc99'],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>