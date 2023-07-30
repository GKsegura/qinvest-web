<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Mostra o formulário de login
    public function createForm()
    {
        return view('auth.form.login');
    }

    // Processa o login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'senha');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            return redirect()->intended('/'); // Redireciona para a página inicial após o login
        } else {
            // Autenticação falhou
            return redirect()->route('login')->with('error', 'Credenciais inválidas.');
        }
    }
    // Processa o logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    }

?>