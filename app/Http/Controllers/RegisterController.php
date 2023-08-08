<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

$timestamp = Carbon::now();

class RegisterController extends Controller
{

    public function createForm()
    {
        return view('auth.page.register');
    }

    public function auth(Request $request)
    {
        // Valide os dados recebidos
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'genero' => 'required|string|max:50',
            'create_time' => 'required|timestamp|max:255',
            'newsletter' => 'required|boolean',
            'terms_user' => 'required|boolean',
            'birth_time' => 'required|date',
            'deleted' => 'required|boolean'
        ]);

        // Execute o INSERT na tabela de usuários
        DB::table('User')->insert([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), // Criptografa a senha
            'genero' => $request->input('genero'),
            'create_time' => Carbon::now('America/Sao_Paulo'),
            'newsletter' => $request->input('newsletter'),
            'birth_time' => $request->input('birth_time'),
            'terms_user' => $request->input('terms_user'),
            'deleted' => false
        ]);

        // Redirecione para uma página de sucesso ou exiba uma mensagem
        //return redirect()->route('sucesso');
    }
}