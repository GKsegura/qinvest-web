<!-- resources/views/auth/form/register.blade.php -->


<form action="{{ route('register') }}" method="POST">
    @csrf

    <div class="field">
        <label for="nome" class="label-form">Nome</label>
        <input id="nome" class="form-control" type="text" name="username" required>
    </div>

    <div class="field">
        <label for="email" class="label-form">Email</label>
        <input id="email" class="form-control" type="email" name="email" required>
    </div>

    <div class="field">
        <label for="genero" class="label-form">Gênero</label>
        <input id="genero" class="form-control" type="text" name="genero" required>
    </div>

    <div class="field">
        <label for="birth_time" class="label-form">Data de Nascimento</label>
        <input id="birth_time" class="form-control" type="date" name="birth_time" required>
    </div>

    <div class="field">
        <label for="password" class="label-form">Senha</label>
        <input id="password" class="form-control" type="password" name="password" required>
    </div>

    <div class="field">
        <label for="confirm-password" class="label-form">Confirme a senha</label>
        <input id="confirm-password" class="form-control" type="password" name="password_confirmation" required>
    </div>

    <div class="field">
        <label for="newsletter" class="label-form">Assinatura de Newsletter</label>
        <input id="newsletter" type="radio" name="newsletter" value="1" required>
    </div>

    <div class="field">
        <label for="terms_user" class="label-form">Aceite dos Termos de Uso</label>
        <input id="terms_user"  type="radio" name="terms_user" value="1" required>
    </div>

    <!-- Adicione outros campos do cadastro, se houver -->
    <button type="submit" class="button-submit">Cadastrar</button>
</form>