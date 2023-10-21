@vite(['resources/js/profile.js'])
<x-layout.head>
    <div class="content">
        <div class="square">
            <h1>Seu perfil:</h1>

            <p id="profile-label">Perfil Investidor:</p>
            <a href="/typeinvestor" class="profile-type"><i>{{ $perfil_investidor }}</i></a>

            @if ($perfil_investidor === "Não possui perfil investidor")
            <p>Sem acesso à área de investimentos.</p>
            <a href="/formulary" class="profile-discover"><i>Descubra qual seu perfil investidor!</i></a>
            @else
            <p>Acha que mudou? <a class="remake-test" href="/formulary"><i>Refazer teste</i></a></p>
            @endif

            <div id="profile-display">
                <label>Email:</label>
                <p>{{ $user->email }}</p>

                <label>Nome:</label>
                <p>{{ $user->username }}</p>

                <label>Data de Nascimento:</label>
                <p>{{ $user->birth_time }}</p>

                <label>Gênero:</label>
                <p>
                    @if ($user->gender == "male")
                    Masculino
                    @elseif ($user->gender == "female")
                    Feminino
                    @else
                    Outro
                    @endif
                </p>

                <button id="edit-button">Editar Informações</button>
            </div>

            <div id="edit-form" style="display: none;">
                <form action="{{ route('update') }}" method="POST">
                    @csrf

                    <label>Email:</label>
                    <input type="email" name="newemail" value="{{ $user->email }}" required><br>

                    <label>Nome:</label>
                    <input type="text" name="newname" value="{{ $user->username }}" required><br><br>

                    <label for="newbirth_time">Data de Nascimento:</label>
                    <input type="date" name="newbirth_time" value="{{ $user->birth_time }}" required><br><br>

                    <label>Gênero:</label>
                    <input type="radio" name="newgender" value="male" {{ $user->gender === 'male' ? 'checked' : '' }}>
                    Masculino
                    <input type="radio" name="newgender" value="female"
                        {{ $user->gender === 'female' ? 'checked' : '' }}> Feminino
                    <input type="radio" name="newgender" value="other" {{ $user->gender === 'other' ? 'checked' : '' }}>
                    Outro<br><br>

                    <button type="submit">Atualizar Informações</button>
                </form>
            </div>
        </div>
    </div>
</x-layout.head>