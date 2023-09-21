<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.page.login');
    }

    /**
     * 
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();


        if (Auth::attempt($credentials)) {
            return redirect()->route('index'); // Redireciona para a página inicial após o login
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

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        Auth::login($user);

        return redirect('/index'); // Redirecione para a página após o login
    }
}