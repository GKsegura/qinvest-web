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
        </div>
    </div>
</x-layout.head>