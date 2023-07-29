<!-- resources/views/cadastro.blade.php -->
<form action="{{ route('cadastro') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>
    <br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" required>
    <br>
    <label for="senha">Senha:</label>
    <input type="senha" name="senha" required>
    <br>
    <!-- Adicione outros campos do cadastro, se houver -->
    <button type="submit">Cadastrar</button>
</form>
