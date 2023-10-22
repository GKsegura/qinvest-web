<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.page.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user_id = $user->id;
            return redirect()->route('index');
        } else {
            $errorMessage = 'Credenciais inválidas. Revise seu email e senha.';
            return view('auth.page.login')->with('errorMessage', $errorMessage);
            //Autenticação falhou
        }
    }
    // Processa o logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}