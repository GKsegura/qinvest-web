<!-- resources/views/cadastro.blade.php -->
@include('layouts.header')
<form action="{{ route('cadastro.store') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>
    <br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" required>
    <br>
    <!-- Adicione outros campos do cadastro, se houver -->
    <button type="submit">Cadastrar</button>
</form>
@include('layouts.footer')