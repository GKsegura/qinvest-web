<!-- resources/views/auth/form/register.blade.php -->
@vite(['resources/utils/alpine.js'])



<form action="{{ route('register') }}" method="POST">
    @csrf



    <div x-data="{ step: 1 }">

        <div x-show="step === 1" class="form" x-transition="transition-enter">

            <label for="email" class="label-form">Email</label>
            <input id="email" class="form-control" type="email" name="email">


            <div class="field">
                <label for="password" class="label-form">Senha</label>
                <input for="password" class="form-control" type="password" name="senha" id="password"
                    onkeyup="passwordValidator()">
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
                <input for="confirm-password" class="form-control" type="password" name="confirmacao_senha"
                    id="confirm-password">
                <i id="eye-icon-confirm-password" class="bi bi-eye"></i>
            </div>

            <button class="btn" @click.prevent="step = 2 ">-></button>

        </div>

        <div x-show="step === 2" class="form" x-transition="transition-enter">

            <div class="field">
                <label for="genero" class="label-form">Gênero</label>
                <select name="gender" class="form-control" id="gender">
                    <option value="male">Masculino</option>
                    <option value="female">Feminino</option>
                    <option value="other">Outro</option>
                </select>
            </div>

            <div class="field">
                <label for="birth_time" class="label-form">Data de Nascimento</label>
                <input id="birth_time" class="form-control" type="date" name="birth_time">
            </div>

            <div class="field">
                <label for="nome" class="label-form">Nome</label>
                <input id="nome" class="form-control" type="text" name="username">
            </div>

            <div class="field">
                <label for="newsletter" class="label-form">Assinatura de Newsletter</label>
                <input id="newsletter" class="form-control" type="checkbox" name="newsletter">
            </div>

            <div>
                <button class="btn" @click.prevent="step = 1">
                    <- </button>
                        <button type="submit" class="btn">Cadastrar</button>
            </div>

        </div>

    </div>


    <!-- Adicione outros campos do cadastro, se houver -->
    <!-- <!-- <button type="submit" class="button-submit">Cadastrar</button> -->
</form>