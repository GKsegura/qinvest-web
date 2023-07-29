<!-- resources/views/auth/form/login.blade.php -->
<form action="{{ route('login') }}" method="POST">
    @csrf

    <div class="input-group">
        <input type="email" placeholder="Email" name="email" required>
    </div>


    <div class="input-group">
        <input type="password" name="senha" placeholder="Senha" required>
    </div>

    <button type="submit">Login</button>
</form>