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


    <div class="page-admin">

        <div class="section-header-page">
            <h1 class="section-title">Olá, {{ Auth::user()->username }}</h1>
            <div class="section-subtitle">
                <p class="m-0 p-0">Seja bem-vindo(a) ao painel de administração do Q-Invest!</p>
                <p class="m-0 p-0">Este é o seu painel de administração, aqui você pode ver as estatísticas dos usuários
                    e
                    investimentos
                    cadastrados.</p>
                <p class="m-0 p-0">Para cadastrar um novo investimento, clique no botão abaixo.</p>
            </div>
        </div>

        <div class="charts">
            <canvas class="chart" id="chartTypeInvestor"></canvas>
            <canvas class="chart" id="chartUserSalary"></canvas>
            <canvas class="chart" id="chartUsers"></canvas>
        </div>

        <a href="/investment" class="btn-investment">Cadastrar investimento</a>

        <svg id="qinvestLogoSmall" viewBox="0 0 199 38" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M183.639 0.184662V9.75567H174.068V19.3267H164.498V28.8968L169.888 34.2571H199V5.545L193.61 0.184662H183.639ZM185.615 1.19846H192.931L196.624 4.86995H189.308L185.615 1.19846ZM184.652 2.14586L188.354 5.82421V13.1557L184.652 9.47668V2.14586ZM189.705 6.22004H197.587V32.8431H170.564V25.3618H180.134V15.791H189.705V6.22004ZM176.044 10.7686H183.698L187.392 14.4401H179.738L176.044 10.7686ZM175.082 11.716L178.783 15.3952V22.7258L175.082 19.0475V11.716ZM166.473 20.3396H174.127L177.821 24.0111H170.167L166.473 20.3396ZM165.511 21.2868L169.213 24.9651V31.959L165.511 28.2806V21.2868Z" />
        </svg>
    </div>


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