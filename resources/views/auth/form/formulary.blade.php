@vite(['resources/utils/alpine.js'])
<form action="{{ route('formulary') }}" method="POST">
    @csrf
    
    <div class="field">
        <label for="nome" class="label-form">Nome do Formulário</label>
        <input id="nome" class="form-control" type="text" name="form_name">
    </div>
            
    <div class="field">
        <label for="obs" class="label-form">Observações</label>
        <input id="obs" class="form-control" type="text" name="obs">
    </div>

    <button type="submit" class="btn">Cadastrar</button>
</form>