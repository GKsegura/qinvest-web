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
            <canvas id="chartTypeInvestor" width="400" height="400"></canvas>

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




            <label> Total de perfis ativos: {{ $test }}</label><br>

            <canvas id="chartUsers" width="400" height="400"></canvas>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

            <label> Número total de usuários: {{ $users }}</label><br>
            <label> Usuários que ganham 1 a 3 salários mínimos: {{ $range1 }}%</label><br>
            <label> Usuários que ganham 4 a 7 salários mínimos: {{ $range2 }}%</label><br>
            <label> Usuários que ganham 8 a 10 salários mínimos: {{ $range3 }}%</label><br>
            <label> Usuários que ganham 11 a 15 salários mínimos: {{ $range4 }}%</label><br>
            <label> Usuários que ganham mais de 15 salários mínimos: {{ $range5 }}%</label><br>

            <canvas id="chartUserSalary" width="400" height="400"></canvas>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
            // Selecione o contexto do gráfico
            var ctx = document.getElementById('chartUserSalary').getContext('2d');

            // Defina os dados e opções
            var data = {
                labels: ['1 a 3 salários mínimos', '4 a 7 salários mínimos', '8 a 10 salários mínimos',
                    '8 a 10 salários mínimos', '11 a 15 salários mínimos', 'mais de 15 salários mínimos'
                ],
                datasets: [{
                    data: [<?= $range1 ?>, <?= $range2 ?>, <?= $range3 ?>, <?= $range4 ?>, <?= $range5 ?>],
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
        </div>
    </div>
</x-layout.head>