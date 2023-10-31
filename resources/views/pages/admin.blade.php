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

             <div class="icon-stair-mother">
                <svg class="svg-icon-stair" width="229.74008mm" height="226.87686mm" viewBox="0 0 229.74008 226.87686"
                    version="1.1" id="svg5" sodipodi:docname="mockup.svg" inkscape:export-filename="logowhite.svg"
                    inkscape:export-xdpi="96" inkscape:export-ydpi="96"
                    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                    xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                    <sodipodi:namedview id="namedview721" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25"
                        inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"
                        inkscape:deskcolor="#d1d1d1" inkscape:document-units="mm" showgrid="false"
                        inkscape:lockguides="true" />
                    <defs id="defs2" />
                    <g id="layer1" transform="translate(-520.24433,-339.94151)">
                        <g id="g3390" transform="matrix(3.1038391,0,0,3.1038391,-193.60648,-820.64877)">
                            <path fill="currentColor" id="path3454"
                                d="m 271.05308,373.92089 v 20.53209 h -20.53137 v 20.53208 h -20.53208 v 20.53209 l 11.56296,11.4993 h 20.53207 20.53138 21.39163 v -61.59626 l -11.56296,-11.4993 z m 4.23842,2.17437 h 15.69597 l 7.92366,7.87558 h -15.69597 z m -2.06404,2.03151 7.93995,7.89254 v 15.72779 l -7.93995,-7.89254 z m 10.83793,8.74207 h 16.90977 v 57.11439 h -57.97322 v -16.05022 h 20.53207 v -20.53209 h 20.53138 v 0 z m -29.30598,9.75781 h 16.42029 l 7.92438,7.87629 h -16.4203 z m -2.06403,2.03221 7.94065,7.89183 v 15.7285 l -7.94065,-7.89254 z m -18.46805,18.49987 h 16.42028 l 7.92438,7.87628 h -16.42028 z m -2.06404,2.03221 7.94065,7.89184 v 15.00347 l -7.94065,-7.89183 z" />
                        </g>
                    </g>
                </svg>
            </div>
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