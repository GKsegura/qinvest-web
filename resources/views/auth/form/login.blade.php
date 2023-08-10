<!-- resources/views/auth/form/login.blade.php -->


@error('invalid_credentials')
<p class="text-red-500"> {{$message}} </p>
@enderror

<form action="{{ route('login') }}" method="POST">
    @csrf

    <div class="field">
        <label for="email" class="label-form">Email:</label>
        <input type=" email" class="form-control" name="email" id="email" required autofocus>
    </div>

    <div class="field">
        <label for="senha" class="label-form">Senha:</label>
        <input type="password" class="form-control" name="password" id="senha" required>
    </div>

    <button type="submit" class="button-submit">Login</button>
</form>