<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.page.login');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated(); 
        if (Auth::attempt($credentials)) 
        {
            $user = Auth::user();
            $userId = $user->id;
            $name = User::where('id', $userId)->value('username');
            echo "<script type='text/javascript'>alert('Bem-vindo de volta, $name')</script>";
            return redirect()->route('index'); // Redireciona para a página inicial após o login
        } 
        else 
        {
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