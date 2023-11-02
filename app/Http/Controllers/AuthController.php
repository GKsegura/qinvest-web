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
            return redirect()->route('login')->with('error', 'Credenciais inválidas. Revise seu email e senha.');
        }
    }
    
    // Processa o logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}