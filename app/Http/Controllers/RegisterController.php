<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Carbon;
use App\Notifications\RegistrationSuccessNotification;
use App\Http\Requests\RegisterRequest;



// $timestamp = Carbon::now();

class RegisterController extends Controller
{

    public function createForm()
    {
        return view('auth.page.register');
    }

public function auth(RegisterRequest $request)
{
    // Valide os dados recebidos
    $validated = $request->validated();
    $fullname = $validated['firstname'] . ' ' . $validated['surname'];

    // if ($request->fails()) {
    //     return Redirect::back()->withErrors($validated)->withInput();
    // }        // Execute o INSERT na tabela de usuários
        try {
            DB::table('users')->insert([
                'email' => $validated['email'],
                'username' => $fullname,
                'password' => Hash::make($validated['password']),
                'gender' => $validated['gender'],
                'newsletter' => $request->input('newsletter'),
                'terms_user' => true,
                'birth_time' => $validated['birth_time'],
                'deleted' => false,
                'created_at' => Carbon::now('America/Sao_Paulo'),
                'updated_at' => null
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            echo "<script type = 'text/javascript'>alert ('Erro no SQL')</script>";
        }
        // Redirecione para uma página de sucesso ou exiba uma mensagem
        return redirect()->route('home', 'Registro concluído com sucesso!');
    }
}