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
            return redirect()->route('index');
        } 
        else 
        {
            return redirect()->route('login')->with('error', 'Ocorreu um erro. Verifique suas credenciais!');
        } 
    }
    // Processa o logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
    }