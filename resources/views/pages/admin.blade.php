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
            <label> Usuários Conservadores: {{ $conservador }}%</label><br>

            <label> Usuários Moderados: {{ $moderado }}%</label><br>

            <label> Usuários Agressivos: {{ $agressivo }}%</label><br>

            <label> Total de perfis ativos: {{ $test }}</label><br>

            <label> Proporção de usuárias: {{ $women }}%</label><br>

            <label> Proporção de usuários: {{ $men }}%</label><br>

            <label> Proporção de não-identificados: {{ $NI }}%</label><br>

            <label> Número total de usuários: {{ $users }}</label><br>

            <label> Usuários que ganham 1 a 3 salários mínimos: {{ $range1 }}%</label><br>

            <label> Usuários que ganham 4 a 7 salários mínimos: {{ $range2 }}%</label><br>

            <label> Usuários que ganham 8 a 10 salários mínimos: {{ $range3 }}%</label><br>

            <label> Usuários que ganham 11 a 15 salários mínimos: {{ $range4 }}%</label><br>

            <label> Usuários que ganham mais de 15 salários mínimos: {{ $range5 }}%</label><br>
                
            <a href="/investment" class="header-link nav-link"><i>Cadastrar investimento</i></a>
        </div>
    </div>
</x-layout.head>