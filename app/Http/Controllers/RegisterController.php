<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function createForm()
    {
        return view('auth.register');
    }

    public function auth(Request $request)
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
            'senha' => Hash::make($request->input('senha')), // Criptografa a senha
            'excluido' => false,
        ]);

        // Redirecione para uma página de sucesso ou exiba uma mensagem
        //return redirect()->route('sucesso');
    }
}
