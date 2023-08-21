@vite(['resources/utils/alpine.js'])
<form action="{{ route('viewformulary') }}" method="GET">
    @csrf
    
    <tr> <!-- CABECALHO -->
        <td>Nome</td><td>Observação</td>
    </tr>
    @foreach($rows as $row) <!-- LOOP PRA LER A TABELA -->
        <tr>
            <td>{{ $row->questions }}</td><td>{{ $row->answers }}</td>
            <td> <!-- COLUNA COM ALTERAR E EXCLUIR -->
            </td>
        </tr>
    @endforeach
</form>