<!-- resources/views/auth/form/login.blade.php -->
<form action="{{ route('login') }}" method="POST">
    @csrf

    <div class="form-group justify-content-center gap-4">
        <div class="field">
            <label for="email" class="label-form">Email:</label>
            <input type=" email" class="field-input form-control" name="email" id="email" autofocus>
            <div class="invalid-input"> @error('email'){{$message}}@enderror</div>
        </div>

        <div class="field">
            <label for="senha" class="label-form">Senha:</label>
            <input type="password" class="field-input form-control" name="password" id="senha">
            <div class="invalid-input"> @error('password'){{$message}}@enderror</div>

        </div>

        <div class="form-actions">
            <button type="submit" class="submit-button">Login</button>

            <div class="form-redirect d-inline-flex justify-content-center w-100">
                <p class="mb-0">Não possui conta? <a href="/register"> Crie uma aqui!</a></p>
            </div>
            <div class="form-redirect d-inline-flex justify-content-center w-100">
                <p><a href="/"> Voltar ao início</a></p>
            </div>
        </div>

        @if(session('error'))
            <script type="text/javascript">
            alert('{{ session('error') }}');
            </script>
        @endif
    </div>

</form>