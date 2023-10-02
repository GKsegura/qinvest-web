<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\User;
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
            $user = Auth::user();
            $user_id = $user->id;
            return redirect()->route('index', 'Logado com sucesso');
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
        return redirect()->route('index');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        Auth::login($user);

        return redirect()->route('index', 'Logado com sucesso');
    }
}
