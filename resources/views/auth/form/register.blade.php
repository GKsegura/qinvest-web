<!-- resources/views/auth/form/register.blade.php -->
@vite(['resources/utils/alpine.js'])


<form action="{{ route('register') }}" method="POST">
    @csrf
    <div x-data="{ step: 1 }">
        <div x-show="step === 1" class="form-group gap-4" x-transition:enter.opacity.duration.600ms>


            <div class="field">
                <label for="email" class="label-form">Email</label>
                <input id="email" class="field-input form-control" type="email" name="email">
                <div class="invalid-input"> @error('email'){{$message}}@enderror</div>

            </div>

            <div class="field">
                <label for="password" class="label-form">Senha</label>
                <div class="input-group">
                    <input for="password" class="field-input form-control" type="password" name="password" id="password"
                        onkeyup="passwordValidator()" />
                    <i id="eye-icon-password" class="input-group-text bi bi-eye"></i>
                </div>
                <div class="invalid-input"> @error('password'){{$message}}@enderror</div>
                <div class="password-strength-bar">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </div>
                <div class="text-password"></div>
            </div>

            <div class="field">
                <label for="password_confirmation" class="label-form">Confirme a senha</label>
                <div class="input-group">
                    <input class="field-input form-control" type="password" name="password_confirmation"
                        id="confirm-password">
                    <i id="eye-icon-confirm-password" class="input-group-text bi bi-eye"></i>
                </div>
                <div class="invalid-input"> @error('password_confirmation'){{$message}}@enderror</div>

            </div>

            <div class="form-actions">
                <button class="step-button" @click.prevent="step = 2 "><i class="bi bi-arrow-right"></i>
                </button>


                <div class="form-redirect d-inline-flex justify-content-center w-100">
                    <p class="mb-0">Já possui conta? <a href="/login"> Entre aqui!</a></p>
                </div>
            </div>



        </div>

        <div x-show="step === 2" class="row justify-content-center gap-4" x-transition:enter.opacity.duration.600ms>

            <div class="field-group">
                <div class="field">
                    <label for="nome" class="label-form">Nome</label>
                    <input id="nome" class="field-input form-control" type="text" name="firstname">
                    <div class="invalid-input"> @error('firstname'){{$message}}@enderror</div>
                </div>

                <div class="field">
                    <label for="sobrenome" class="label-form">Sobrenome</label>
                    <input id="sobrenome" class="field-input form-control" type="text" name="surname">
                    <div class="invalid-input"> @error('surname'){{$message}}@enderror</div>
                </div>
            </div>

            <div class="field-group">
                <div class="field">
                    <label for="gender" class="label-form">Gênero</label>
                    <select name="gender" class="field-input form-control" id="gender">
                        <option value="male">Masculino</option>
                        <option value="female">Feminino</option>
                        <option value="other">Outro</option>
                    </select>
                    <div class="invalid-input"> @error('gender'){{$message}}@enderror</div>

                </div>

                <div class="field">
                    <label for="birth_time" class="label-form">Data de Nascimento</label>
                    <input id="birth_time" class="field-input form-control" type="date" name="birth_time">
                    <div class="invalid-input"> @error('birth_time'){{$message}}@enderror</div>

                </div>
            </div>

            <div class=" text-start">
                <input id="newsletter" class="field-input form-check-input" type="checkbox" name="newsletter" checked>
                <label for="newsletter" class="form-check-label"> Desejo receber newsletter e outras
                    notificações</label>
            </div>

            <div class=" form-actions">
                <button class="step-button" @click.prevent="step = 1">
                    <i class="bi bi-arrow-left"></i> </button>
                <button type="submit" class="submit-button">Finalizar cadastro</button>


                <div class="form-redirect d-inline-flex justify-content-center w-100">
                    <p class="mb-0">Já possui conta? <a href="/login"> Entre aqui!</a></p>
                </div>
            </div>


        </div>

    </div>

    </div>

</form>