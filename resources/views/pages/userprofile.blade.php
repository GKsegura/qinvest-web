<x-layout.head>

    <form action="{{ route('update') }}" method="POST">
        @csrf

        <div class="page">
            <div class="user-data">
                <h1>Seu perfil:</h1>

                <p>Perfil Investidor:</p>

                <a href="/typeinvestor" class="header-link nav-link">Mais informações: <i>{{ $perfil_investidor }}</i></a>


                @if ($perfil_investidor === "Não possui perfil investidor")
                <p>Para ter um perfil investidor, é necessário responder o <a href="/formulary" class="header-link nav-link"><i>questionário</i></a></p>

                @else
                <p>Acha que mudou? <a href="/formulary" class="header-link nav-link"><i>Refazer teste</i></a></p>
                @endif

                <label> Email: <br></label>
                <input type="email" name="newemail" value="{{ $user->email }}" required><br>

                <label>Nome: <br></label>
                <input type="text" name="newname" value="{{ $user->username }}" required><br><br>

                <label for="newbirth_time">Data de Nascimento:</label>
                <input type="date" name="newbirth_time" value="{{ $user->birth_time }}" required><br><br>

                <label> Gênero:
                    @if ($user->gender=="male")
                    {{"Masculino"}}
                    @elseif($user->gender==="female")
                    {{"Feminino"}}
                    @else
                    {{"Outro"}}
                    @endif
                </label><br>
                <input type="radio" name="newgender" value="male" {{ $user->gender === 'male' ? 'checked' : '' }}> Masculino
                <input type="radio" name="newgender" value="female" {{ $user->gender === 'female' ? 'checked' : '' }}> Feminino
                <input type="radio" name="newgender" value="other" {{ $user->gender === 'other' ? 'checked' : '' }}> Outro<br><br>

                <button type="submit">Atualizar Informações</button>
    </form>

</x-layout.head>