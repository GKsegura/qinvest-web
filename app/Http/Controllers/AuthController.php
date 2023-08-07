<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Mostra o formulário de login
    public function showLoginForm()
    {
        return view('auth.page.login');
    }

    // Processa o login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|max:150',
            'password' => 'required|string|max:200',
        ]); 

        
        //   dd($credentials); 

        if (Auth::attempt($credentials)) {
            //Autenticação bem-sucedida

            return redirect()->route('home'); // Redireciona para a página inicial após o login
        } else {
            //Autenticação falhou
            return redirect()->back()->withErrors('invalid_credentials', 'Credenciais inválidas.');
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