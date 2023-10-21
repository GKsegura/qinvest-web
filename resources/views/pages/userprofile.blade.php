@vite(['resources/js/profile.js'])
<x-layout.head>
    <div class="content">
        <div class="square">
            <h1>Seu perfil:</h1>

            <p id="profile-label">Perfil Investidor:</p>
            <a href="/typeinvestor" class="profile-type"><i>{{ $perfil_investidor }}</i></a>

            @if ($perfil_investidor === "Não possui perfil investidor")
            <p>Sem acesso à área de investimentos.</p>
            <a href="/formulary" class="profile-discover"><i>Descubra qual seu perfil investidor!</i></a><br>
            @else
            <p class="remake-label">Acha que mudou? <a class="remake-test" href="/formulary"><i>Refazer teste</i></a></p>
            @endif

            <div id="profile-display">
                <label>Email:</label>
                <p class="profile-info">{{ $user->email }}</p>

                <label>Nome:</label>
                <p class="profile-info">{{ $user->username }}</p>

                <label>Data de Nascimento:</label>
                <p class="profile-info">{{ $user->birth_time }}</p>

                <label>Gênero:</label>
                <p class="profile-info">
                    @if ($user->gender == "male")
                    Masculino
                    @elseif ($user->gender == "female")
                    Feminino
                    @else
                    Outro
                    @endif
                </p>

                <button id="edit-button">Editar Perfil</button>
            </div>

            <div id="edit-form">
                <form class="update" action="{{ route('update') }}" method="POST">
                    @csrf
                        <label>Email:</label>
                        <br>
                        <input type="email" name="newemail" value="{{ $user->email }}" required><br><br>

                        <label>Nome:</label>
                        <br>
                        <input type="text" name="newname" value="{{ $user->username }}" required><br><br>

                        <label for="newbirth_time">Data de Nascimento:</label>
                        <br>
                        <input type="date" name="newbirth_time" value="{{ $user->birth_time }}" required><br><br>

                        <label>Gênero:</label>
                        <br>
                        <input type="radio" name="newgender" value="male" {{ $user->gender === 'male' ? 'checked' : '' }}> Masculino
                        <input type="radio" name="newgender" value="female" {{ $user->gender === 'female' ? 'checked' : '' }}> Feminino
                        <input type="radio" name="newgender" value="other" {{ $user->gender === 'other' ? 'checked' : '' }}> Outro<br><br>
                   
                    <button id="edit-button" type="submit">Atualizar Informações</button>
                </form>

            </div>
        </div>
        <svg id="qinvestLogoSmall" viewBox="0 0 199 38" xmlns="http://www.w3.org/2000/svg">
            <path d="M183.639 0.184662V9.75567H174.068V19.3267H164.498V28.8968L169.888 34.2571H199V5.545L193.61 0.184662H183.639ZM185.615 1.19846H192.931L196.624 4.86995H189.308L185.615 1.19846ZM184.652 2.14586L188.354 5.82421V13.1557L184.652 9.47668V2.14586ZM189.705 6.22004H197.587V32.8431H170.564V25.3618H180.134V15.791H189.705V6.22004ZM176.044 10.7686H183.698L187.392 14.4401H179.738L176.044 10.7686ZM175.082 11.716L178.783 15.3952V22.7258L175.082 19.0475V11.716ZM166.473 20.3396H174.127L177.821 24.0111H170.167L166.473 20.3396ZM165.511 21.2868L169.213 24.9651V31.959L165.511 28.2806V21.2868Z" />
        </svg>

    </div>

</x-layout.head>