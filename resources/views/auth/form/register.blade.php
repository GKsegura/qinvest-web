<!-- resources/views/auth/form/register.blade.php -->

@include('layouts.header')

<form action="{{ route('register') }}" method="POST">
    @csrf

    <div class="field">
        <label for="nome" class="label-form">Nome</label>
        <input for="nome" class="form-control" type="text" name="nome" required>
    </div>

    <div class="field">
        <label for="email" class="label-form">Email</label>
        <input for="email" class="form-control" type="email" name="email" required>
    </div>

    <div class="field">
        <label for="password" class="label-form">Senha</label>
        <input for="password" class="form-control" type="password" name="senha" id="password" onkeyup="passwordValidator()" required>
        <i id="eye-icon-password" class="bi bi-eye"></i>
        <div class="password-strength-bar">
            <span class="one"></span>
            <span class="two"></span>
            <span class="three"></span>
        </div>
        <div class="text-password"></div>
    </div>
    <div class="field">
        <label for="confirm-password" class="label-form">Confirme a senha</label>
        <input for="confirm-password" class="form-control" type="password" name="confirmacao_senha" id="confirm-password" required>
        <i id="eye-icon-confirm-password" class="bi bi-eye"></i>
    </div>

    <!-- Adicione outros campos do cadastro, se houver -->
    <button type="submit" class="button-submit">Cadastrar</button>
</form>

@include('layouts.footer-form')