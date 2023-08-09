<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    // Mostra o formulário de login
    public function showLoginForm()
    {
        return view('auth.page.login');
    }

    // Processa o login
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated(); 


        if (Auth::attempt($credentials)) {
            //Autenticação bem-sucedida

            return redirect()->route('home'); // Redireciona para a página inicial após o login
        } else {
            return back()->withErrors([
                'invalid_credentials' => 'As credênciais são invalidas',
            ])->withInput();
            //Autenticação falhou
        } 
    }
    // Processa o logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    }