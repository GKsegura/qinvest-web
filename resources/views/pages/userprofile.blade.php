@vite(['resources/utils/alpine.js'])
<x-layout.app>

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
    <label> Perfil Investidor: {{ $tests->investor_id}}</label><br>

</x-layout.app>