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

    <!-- <label>{{ $user->id }}</label><br> -->

    <div class="page">

        <label> Nome: {{ $user->username }}</label><br>

        <label> Email: {{ $user->email }}</label><br>

        <label> Data de Nascimento: {{ $user->birth_time }}</label><br>

        <label> Gênero: {{ $user->gender }}</label><br>

        <label> Perfil Investidor: {{ $perfil_investidor }}</label><br>

        <a href="/formulary" class="header-link nav-link">Descubra seu perfil investidor!</a>
    </div>
</x-layout.head>