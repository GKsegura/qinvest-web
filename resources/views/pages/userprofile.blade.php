<x-layout.head>

    <form action="{{ route('update') }}" method="POST">
        @csrf

        <!-- Add input fields for email, name, date of birth, and gender -->
        <label for="newemail">Email:</label>
        <input type="email" name="newemail" value="{{ $user->email }}" required><br><br>

        <label for="newname">Nome:</label>
        <input type="text" name="newname" value="{{ $user->username }}" required><br><br>

        <label for="newbirth_time">Data de Aniversário:</label>
        <input type="date" name="newbirth_time" value="{{ $user->birth_time }}" required><br><br>

        <label for="investor_profile">Perfil Investidor:</label>
        <!-- Add your investor_profile code here -->

        <label for="newgender">Gênero:</label>
        <input type="radio" name="newgender" value="male" {{ $user->gender === 'male' ? 'checked' : '' }}> Masculino
        <input type="radio" name="newgender" value="female" {{ $user->gender === 'female' ? 'checked' : '' }}> Feminino
        <input type="radio" name="newgender" value="other" {{ $user->gender === 'other' ? 'checked' : '' }}> Outro<br><br>

        <button type="submit">Atualizar Informações</button>
    </form>

</x-layout.head>