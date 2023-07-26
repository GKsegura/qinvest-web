<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function createForm()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        // Valide os dados recebidos
        $request->validate([
            'nome' => 'required|string|max:150',
            'email' => 'required|email|max:150|unique:usuarios,email',
            'senha' => 'required|senha|max:200|unique:usuarios,senha',
]);

        // Execute o INSERT na tabela de usuários
        DB::table('usuarios')->insert([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'senha' => $request->input('senha'),
        ]);

        // Redirecione para uma página de sucesso ou exiba uma mensagem
        return redirect()->route('sucesso');
    }
}
