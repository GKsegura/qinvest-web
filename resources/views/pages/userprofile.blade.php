@vite(['resources/js/profile.js'])
<x-layout.head>
    <div class="page-profile">

        <h1 class="section-title">{{ Auth::user()->username }}</h1>
        <div class="square">
            @if ($perfil_investidor === "Não possui perfil investidor")
            <a href="/formulary" class="profile-discover"><i>Descubra qual seu perfil investidor!</i></a>
            @else
            <p id="profile-label">Perfil Investidor</p>
            <a href="/typeinvestor" class="profile-type"><i>{{ $perfil_investidor }}</i></a>
            <p>Acha que mudou? <a class="remake-test" href="/formulary"><i>Refazer teste</i></a></p>
            @endif

            <div id="profile-display">
                <div class="field-group">
                    <div class="field">
                        <label>Email</label>
                        <p class="profile-info">{{ $user->email }}</p>
                    </div>

                    <div class="field">
                        <label>Nome</label>
                        <p class="profile-info">{{ $user->username }}</p>
                    </div>
                </div>

                <div class="field-group">
                    <div class="field">
                        <label>Data de Nascimento</label>
                        <p class="profile-info">{{ $user->birth_time }}</p>
                    </div>

                    <div class="field">
                        <label>Gênero</label>
                        <p class="profile-info">
                            @if ($user->gender == "male")
                            Masculino
                            @elseif ($user->gender == "female")
                            Feminino
                            @else
                            Outro
                            @endif
                        </p>
                    </div>
                </div>

                <button id="edit-button">Editar Perfil</button>
            </div>

            <div id="edit-form">
                <form class="update" action="{{ route('update') }}" method="POST">
                    @csrf

                    <div class="field-group">
                        <div class="field">
                            <label>Email</label>
                            <input type="email" name="newemail" value="{{ $user->email }}" required>
                        </div>

                        <div class="field">
                            <label>Nome:</label>
                            <input type="text" name="newname" value="{{ $user->username }}" required>
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="field">
                            <label for="newbirth_time">Data de Nascimento:</label>
                            <input type="date" name="newbirth_time" value="{{ $user->birth_time }}" required>
                        </div>

                        <div class="field">
                            <label>Gênero</label>
                            <div class="radio-input">
                                <input type="radio" name="newgender" value="male" id="op-male"
                                    {{ $user->gender === 'male' ? 'checked' : '' }}> <label
                                    for="op-male">Masculino</label>

                                <input type="radio" name="newgender" value="female" id="op-female"
                                    {{ $user->gender === 'female' ? 'checked' : '' }}> <label
                                    for="op-female">Feminino</label>

                                <input type="radio" name="newgender" value="other" id="op-other"
                                    {{ $user->gender === 'other' ? 'checked' : '' }}>
                                <label for="op-other">Outro</label>
                            </div>
                        </div>
                    </div>

                    <!--                     
                    <label>Gênero:</label>
                    <input type="radio" name="newgender" value="male" {{ $user->gender === 'male' ? 'checked' : '' }}>
                    Masculino
                    <input type="radio" name="newgender" value="female"
                        {{ $user->gender === 'female' ? 'checked' : '' }}>
                    Feminino
                    <input type="radio" name="newgender" value="other" {{ $user->gender === 'other' ? 'checked' : '' }}>
                    Outro<br><br> -->

                    <button id="edit-button" type="submit">Atualizar Informações</button>

                </form>
            </div>
        </div>
        <div class="icon-stair-mother">
            <svg class="svg-icon-stair" width="229.74008mm" height="226.87686mm" viewBox="0 0 229.74008 226.87686"
                version="1.1" id="svg5" sodipodi:docname="mockup.svg" inkscape:export-filename="logowhite.svg"
                inkscape:export-xdpi="96" inkscape:export-ydpi="96"
                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg"
                xmlns:svg="http://www.w3.org/2000/svg">
                <sodipodi:namedview id="namedview721" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25"
                    inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"
                    inkscape:deskcolor="#d1d1d1" inkscape:document-units="mm" showgrid="false"
                    inkscape:lockguides="true" />
                <defs id="defs2" />
                <g id="layer1" transform="translate(-520.24433,-339.94151)">
                    <g id="g3390" transform="matrix(3.1038391,0,0,3.1038391,-193.60648,-820.64877)">
                        <path fill="currentColor" id="path3454"
                            d="m 271.05308,373.92089 v 20.53209 h -20.53137 v 20.53208 h -20.53208 v 20.53209 l 11.56296,11.4993 h 20.53207 20.53138 21.39163 v -61.59626 l -11.56296,-11.4993 z m 4.23842,2.17437 h 15.69597 l 7.92366,7.87558 h -15.69597 z m -2.06404,2.03151 7.93995,7.89254 v 15.72779 l -7.93995,-7.89254 z m 10.83793,8.74207 h 16.90977 v 57.11439 h -57.97322 v -16.05022 h 20.53207 v -20.53209 h 20.53138 v 0 z m -29.30598,9.75781 h 16.42029 l 7.92438,7.87629 h -16.4203 z m -2.06403,2.03221 7.94065,7.89183 v 15.7285 l -7.94065,-7.89254 z m -18.46805,18.49987 h 16.42028 l 7.92438,7.87628 h -16.42028 z m -2.06404,2.03221 7.94065,7.89184 v 15.00347 l -7.94065,-7.89183 z" />
                    </g>
                </g>
            </svg>
        </div>
    </div>
</x-layout.head>