@vite(['resources/utils/alpine.js'])
<form action="{{ route('viewformulary') }}" method="POST">
    @csrf
    
    <tr> <!-- CABECALHO -->
        <td>Nome</td><td>Observação</td>
    </tr>
    @foreach($rows as $row) <!-- LOOP PRA LER A TABELA -->
        <tr>
            <td>{{ $row->form_name }}</td><td>{{ $row->obs }}</td>
            <td> <!-- COLUNA COM ALTERAR E EXCLUIR -->
            <a class='btn deep-orange' href="{{ route('auth.form.editar',$row->id) }}">Alterar</a>
            <!--<a class='btn rede' href="{{ route('admin.cursos.excluir',$row->id) }}">Excluir</a>-->
            </td>
        </tr>
    @endforeach

    <button type="submit" class="btn">Cadastrar</button>
</form>