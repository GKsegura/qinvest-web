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
        try {
            $request->validate([
                'username' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'password' => 'required|string|max:255',
                'gender' => 'required|string|max:50',
                'birth_time' => 'required|date',
            ]);
        } catch (\Exception $v) {
            echo "<script type = 'text/javascript'>alert ('Erro na validação')</script>";
        } 

        // Execute o INSERT na tabela de usuários
        try {
            DB::table('users')->insert([
                'email' => $request->input('email'),
                'username' => $request->input('username'),
                'password' => Hash::make($request->input('password')),
                'gender' => $request->input('gender'),
                'newsletter' => $request->input('newsletter'),
                'terms_user' => true,
                'birth_time' => $request->input('birth_time'),
                'deleted' => false,
                'created_at' => Carbon::now('America/Sao_Paulo')
            ]);
        } catch (\Exception $e) {
            echo "<script type = 'text/javascript'>alert ('Sei lá')</script>";
        }

        // Redirecione para uma página de sucesso ou exiba uma mensagem
        //return redirect()->route('sucesso');
    }
}