<!-- resources/views/auth/form/register.blade.php -->


<form action="{{ route('register') }}" method="POST">
    @csrf



    <div class="field">
        <label for="email" class="label-form">Email</label>
        <input id="email" class="form-control" type="email" name="email">
    </div>

    <!--<div class="field">-->


    <div class="field">
        <label for="password" class="label-form">Senha</label>
        <input id="password" class="form-control" type="password" name="password">
    </div>

    <div class="field">
        <label for="confirm-password" class="label-form">Confirme a senha</label>
        <input id="confirm-password" class="form-control" type="password" name="password_confirmation">

    </div>

    <!-- <label for="genero" class="label-form">Gênero</label>
        <select name="gender" id="gender">
        <option value="male">Masculino</option>
        <option value="female">Feminino</option>
        <option value="other">Outro</option>
    </select>

    <div class="field">
        <label for="birth_time" class="label-form">Data de Nascimento</label>
        <input id="birth_time" class="form-control" type="date" name="birth_time" >
    </div>

    <div class="field">
        <label for="nome" class="label-form">Nome</label>
        <input id="nome" class="form-control" type="text" name="username" >
    </div>

    <div class="field">
        <label for="newsletter" class="label-form">Assinatura de Newsletter</label>
        <input id="newsletter" type="checkbox" name="newsletter">
    </div> -->

    <!-- Adicione outros campos do cadastro, se houver -->
    <button type="submit" class="button-submit">Cadastrar</button>
</form>