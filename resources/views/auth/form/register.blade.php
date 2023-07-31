<!-- resources/views/auth/form/register.blade.php -->

@include('layouts.header')

<form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="input-group">
        <input type="text" name="nome" placeholder="Nome" required>
    </div>

    <div class="input-group">
        <input type="email" placeholder="Email" name="email" required>
    </div>



    <div class="input-group">
        <input type="password" name="senha" placeholder="Senha" required>
    </div>

    <div class="input-group">
        <input type="password" name="senha" placeholder="Confirmar senha" required>
    </div>

    <!-- Adicione outros campos do cadastro, se houver -->
    <button type="submit">Cadastrar</button>
</form>

@include('layouts.footer-form')