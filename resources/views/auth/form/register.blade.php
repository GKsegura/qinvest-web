<!-- resources/views/auth/form/register.blade.php -->
@vite(['resources/lib/alpine.js'])


<form action="{{ route('register') }}" method="POST">
    @csrf
    <div x-data="{ step: 1 }">
        <div x-show="step === 1" class="form-group gap-4" x-transition:enter.opacity.duration.600ms>


            <div class="field">
                <label for="email" class="label-form">Email</label>
                <input id="email" class="field-input form-control" type="email" name="email">
                @if(isset($errorMessage)) <!-- Check if errorMessage is set -->
                <div class="invalid-input">{{ $errorMessage }}</div> <!-- Display error message -->
                @endif
            </div>


            <div class="field">
                <label for="password" class="label-form">Senha</label>
                <div class="input-group">
                    <input for="password" class="field-input form-control" type="password" name="password" id="password" onkeyup="passwordValidator()" />
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
                    <input class="field-input form-control" type="password" name="password_confirmation" id="confirm-password">
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
                <a href="{{ url('/auth/google') }}" class="btn google-input">Conectar com o Google <img height="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEkUlEQVR4nO2Zb0wbZRzHn3taesUtRpOJYbo/DoQM5c/GMgryzxkYxbGBiQsbNBCEFGaIY8zCCuaUMSiQAQMGQWAgcSY2GeuNuzpc8NqNvRoCItE3841Dthj3ToNzbX+mVRBI197Zo2VJv8n3XZ+nn89dn6dPrwj5448/HgcoJIWqgGIoxywU4HuQTfwJSsIKBxBAKgJIQzbIJhZBhX+BE/g6VAUU2ccgXwc0UgWU4tvwNmGBJASCqiQsoMa3QRsQ433wOlk4qPEsvCkQ2llTEUAxnoEaFOIdeA3RCumEzWPwtT2IrHCK0K0f+HkUCMX4B9HBk9b0PTwNFJKJC9+NngcVfrDu8En/toJoFw9+EMnhOPGr1+DLCE40eIeAGn/vPXgsMvyHRIfgrbEMT0IlroUmaQpQaAtQKAjOSN6C05hy7Db21zgbW4pN4sI3kyGQQVh5g5+W9PJZfEChZ+ADydAqkVKR4R1vVIHv8IIvwPNwDr0oeP4aFAJ5+P76wJvl22CcfAQaCUCyC/gSPAV6JEEbLWAmdWAmwdHeAIB0wvmV35DweiQBs2x+WcDeURmACv8Hn0lYoAK9hDZiwCSPXwW/VI4E0En/ObuclPSjjRowybROBZY6FPAAyhGJNmrATF5xKWCSdQiZL1gzC2I0XDthO9rUd9e9gImccynAkRm+EAjWzMIbddcW+Qg8dCMQ6iuB3TW3rHwEHrkWQJt9JbCjehKeaoHtVd+C5x+hm7IwXwns1t60Pd2L+JNRHovYTI642UY7fSVwRDc8z0NAduZJ8A+5Z6Geif/jvF4RiEROy3D+puiPvrG4Eii/0DjqXoALVDiDnx0PBhWthENXs6HDGHtJbIGTnfX97u6Arq/iuHsBQBjMsntL4DYzCfRYOGQbDjvg7c2jlZaL11/bJhZ8W496Z2SNyeoK/vVas4XiKH5P88BENtrhfzdthrNMwjL4ylaPJi9wXIrHjwcpjpIeafxswd3VL2lrm+A9KXCBL98df+GvEjrdKfxSP2YTZjyRoDhKmt/SM+d2/6+egsbuylhBkzcwihlX8CvvRP/X4VuFwvfeiNhe1lX3E5/d51hz75zQ+RE9FvZKPq208pHIp5WWzq/2DlCDKXJ38w6PRW1qZ/b15RmU1pyRHDja2uH2FEp9ekrQl+dyutmY1iweAitFGljFdJdxL6VnIw5cGdsVdJkL2zJgjEq8aNxTV8ckTNpfs3JM1kgOFPZQsLXqO6cC77c3dSNPomPjpvkKeNKiwXLYWX1nFfy7TQM/Ik+j10fINHTqfW9IFH5RCJG1Jgd8ev2Xv53o6hJ0cHxiOG7HczVM4oI3JI7pc0HVemGeGq4MEgV+hYT8LBM/K2RN/J+eYxXTRmPo+v3m7jNGNecaMq2iX3lDprWXjWlG3sgwvSe0gY2beseQ5TF4ztXDjqt++caru5C3MzQWGdvM7L9VZDj4WCh4AZ3xuJGJm/icifb+n3xrowck6WeiC1uN+0a1TOLPajptUWVQWu13yH4IzDVk2tSGtMWqa8nzLex+ts8YU2Afg/zxxx/kaf4GzSVnCicBYF0AAAAASUVORK5CYII=">
                </a>
                <a id="home" href="/">Voltar ao início</a>
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