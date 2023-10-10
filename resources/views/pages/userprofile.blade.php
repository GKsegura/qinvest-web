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
            <h1>Seu perfil:</h1>

            <p>Perfil Investidor:</p>
            <p>
            <p>Acha que mudou? <a href="/typeinvestor" class="header-link nav-link"><i>Refazer teste</i></a></p>
            <p>{{ $perfil_investidor }}</p>

            @if ($perfil_investidor === "Não possui perfil investidor")
            <p>Para ter um perfil investidor, é necessário responder o <a href="/formulary" class="header-link nav-link"><i>questionário</i></a></p>

            @else
            <p>Acha que mudou? <a href="/formulary" class="header-link nav-link"><i>Refazer teste</i></a></p>
            @endif

            <p> Email: <br>{{ $user->email }}</p>

            <p>Nome: <br> {{ $user->username }}</p>

            <label> Data de Nascimento: <br> {{ \Carbon\Carbon::parse($user->birth_time)->format('d/m/Y') }}</label><br>

            <label> Gênero:
                @if ($user->gender=="male")
                {{"Masculino"}}
                @elseif($user->gender==="female")
                {{"Feminino"}}
                @else
                {{"Outro"}}
                @endif
            </label><br>


        </div>
    </div>
</x-layout.head>