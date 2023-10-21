<!-- resources/views/auth/form/login.blade.php -->

<form action="{{ route('login') }}" method="POST">
    @csrf

    <div class="form-group justify-content-center gap-4">
        <div class="field">
            @if(isset($errorMessage)) <!-- Check if errorMessage is set -->
            <div class="invalid-input">{{ $errorMessage }}</div> <!-- Display error message -->
            @endif
            <label for="email" class="label-form">Email:</label>
            <input type=" email" class="field-input form-control" name="email" id="email" autofocus>
        </div>

        <div class="field">
            <label for="senha" class="label-form">Senha:</label>
            <input type="password" class="field-input form-control" name="password" id="senha">
        </div>

        <div class="text-start">
            <input id="newsletter" class="form-check-input" type="checkbox" name="newsletter">
            <label for="newsletter" class="form-check-label">Lembrar minha senha.</label>

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

    </div>

</form>