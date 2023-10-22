<x-layout.head>
    @vite(['resources/utils/alpine.js'])
    @if (session('success')) <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <div class="page">
        <div class="user-data">
            <h1>Olá, {{ Auth::user()->username }}</h1>
            <p>Seja bem-vindo(a) ao painel de administração do Q-Invest!</p>
            <p>Este é o seu painel de administração, aqui você pode ver as estatísticas dos usuários e investimentos
                cadastrados.</p>
            <p>Para cadastrar um novo investimento, clique no botão abaixo.</p>

            <div class="charts">
                <canvas class="chart" id="chartTypeInvestor"></canvas>
                <canvas class="chart" id="chartUserSalary"></canvas>
                <canvas class="chart" id="chartUsers"></canvas>
            </div>

            <a href="/investment" class="btn-investment">Cadastrar investimento</a>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
            // Selecione o contexto do gráfico
            var ctx = document.getElementById('chartTypeInvestor').getContext('2d');
            // Defina os dados e opções
            var data = {
                labels: ['Conservadores', 'Moderados', 'Agressivos'],
                datasets: [{
                    data: [<?= $conservador ?>, <?= $moderado ?>, <?= $agressivo ?>],
                    backgroundColor: ['#7dc1ff', '#9e63ff', '#f62e2e'], // Cores para cada setor
                }]
            };
            // Defina as opções do gráfico para mostrar a porcentagem no hover
            var options = {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.label;
                                label = context.parsed + '%';
                                return label;
                            }
                        }
                    }
                }
            };
            // Crie o gráfico de setores com as opções
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: options
            });
            </script>
            <script>
            // Selecione o contexto do gráfico
            var ctx = document.getElementById('chartUsers').getContext('2d');
            // Defina os dados e opções
            var data = {
                labels: ['Mulher', 'Homem', 'Preferiu não se identificar'],
                datasets: [{
                    data: [<?= $women ?>, <?= $men ?>, <?= $NI ?>],
                    backgroundColor: [' #fc0fc0', 'blue', 'darkgray'], // Cores para cada setor
                }]
            };
            // Defina as opções do gráfico para mostrar a porcentagem no hover
            var options = {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.label;
                                label = context.parsed + '%';
                                return label;
                            }
                        }
                    }
                }
            };
            // Crie o gráfico de setores com as opções
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: options
            });
            </script>
            <script>
            // Selecione o contexto do gráfico
            var ctx = document.getElementById('chartUserSalary').getContext('2d');
            // Defina os dados e opções
            var data = {
                labels: ['1 a 3 salários mínimos', '4 a 7 salários mínimos', '8 a 10 salários mínimos',
                    '11 a 15 salários mínimos', 'mais de 15 salários mínimos'
                ],
                datasets: [{
                    data: [<?= $range1 ?>, <?= $range2 ?>, <?= $range3 ?>, <?= $range4 ?>, <?= $range5 ?>],
                    backgroundColor: ['#ff9bfc', '#de7adb', '#bd59bb', '#9b389a',
                        '#7a1779'
                    ], // Cores para cada setor
                }]
            };
            // Defina as opções do gráfico para mostrar a porcentagem no hover
            var options = {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.label;
                                label = context.parsed + '%';
                                return label;
                            }
                        }
                    }
                }
            };
            // Crie o gráfico de setores com as opções
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: options
            });
            </script>
        </div>
    </div>
</x-layout.head>