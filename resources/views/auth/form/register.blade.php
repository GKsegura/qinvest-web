<!-- resources/views/auth/form/register.blade.php -->
@vite(['resources/utils/alpine.js'])

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('register') }}" method="POST">
    @csrf
    <div x-data="{ step: 1 }">

        <div x-show="step === 1" class="row justify-content-center gap-4" x-transition:enter.opacity.duration.600ms>

            <div class="field col-10">
                <label for="email" class="label-form">Email</label>
                <input id="email" class="form-control" type="email" name="email" required>
            </div>

            <div class="field col-10">
                <label for="password" class="label-form">Senha</label>
                <div class="input-group">
                    <input for="password" class="form-control" type="password" name="password" id="password"
                        onkeyup="passwordValidator()" required />
                    <i id="eye-icon-password" class="input-group-text bi bi-eye"></i>
                </div>
                <div class="password-strength-bar">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </div>
                <div class="text-password"></div>
            </div>

            <div class="field col-10">
                <label for="password_confirmation" class="label-form" required>Confirme a senha</label>
                <div class="input-group">
                    <input class="form-control" type="password" name="password_confirmation"
                        id="confirm-password" required>
                    <i id="eye-icon-confirm-password" class="input-group-text bi bi-eye"></i>
                </div>
            </div>

            <div class="form-actions">
                <button class="step-button" @click.prevent="step = 2 "><i class="bi bi-arrow-right"></i>
                </button>
            </div>

        </div>

        <div x-show="step === 2" class="row justify-content-center gap-4" x-transition:enter.opacity.duration.600ms>

            <div class="col-10">
                <div class="row">
                    <div class="field col-6">
                        <label for="nome" class="label-form">Nome</label>
                        <input id="nome" class="form-control" type="text" name="firstname" required>
                    </div>

                    <div class="field col-6">
                        <label for="sobrenome" class="label-form">Sobrenome</label>
                        <input id="sobrenome" class="form-control" type="text" name="surname" required>
                    </div>
                </div>
            </div>

            <div class="col-10">
                <div class="row">
                    <div class="field col-6">
                        <label for="gender" class="label-form">Gênero</label>
                        <select name="gender" class="form-control" id="gender" required>
                            <option value="male">Masculino</option>
                            <option value="female">Feminino</option>
                            <option value="other">Outro</option>
                        </select>
                    </div>

                    <div class="field col-6">
                        <label for="birth_time" class="label-form">Data de Nascimento</label>
                        <input id="birth_time" class="form-control" type="date" name="birth_time" required>
                    </div>
                </div>
            </div>

            <div class="col-10">
                <input id="newsletter" class="form-check-input" type="checkbox" name="newsletter">
                <label for="newsletter" class="form-check-label">Assinatura de Newsletter</label>
            </div>

            <div class="col-10 form-actions">
                <button class="step-button" @click.prevent="step = 1">
                    <i class="bi bi-arrow-left"></i> </button>
                <button type="submit" class="submit-button">Finalizar cadastro</button>
            </div>
        </div>

    </div>

    </div>
    <!-- Adicione outros campos do cadastro, se houver -->
    <!-- <!-- <button type="submit" class="button-submit">Cadastrar</button> -->
</form>