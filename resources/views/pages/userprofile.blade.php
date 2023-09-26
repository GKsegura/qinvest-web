@vite(['resources/utils/alpine.js'])

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <label>{{ $user->id }}</label><br>
    <br>
    <label> Nome: {{ $user->username }}</label><br>
    <br>
    <label> Email: {{ $user->email }}</label><br>
    <br>
    <label> Aniversário: {{ $user->birth_time }}</label><br>
    <br>
    <label> Gênero: {{ $user->gender }}</label><br>
    <br>
    <label> Perfil Investidor: {{ $perfil_investidor }}</label><br>
