<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function createForm()
    {
        return view('auth.cadastro');
    }

    public function store(Request $request)
    {
        // Valide os dados recebidos
        $request->validate([
            'nome' => 'required|string|max:150',
            'email' => 'required|string|max:150',
            'senha' => 'required|string|max:200',
        ]);

        // Execute o INSERT na tabela de usuários
        DB::table('usuario')->insert([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'senha' => $request->input('senha'),
            'excluido' => false,
        ]);

        // Redirecione para uma página de sucesso ou exiba uma mensagem
        //return redirect()->route('sucesso');
    }
}
