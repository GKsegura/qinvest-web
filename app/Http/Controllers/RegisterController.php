<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Carbon;
use App\Notifications\RegistrationSuccessNotification;
use Illuminate\Support\Facades\Request;


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
    $validator = Validator::make($request->all(), [
        'email' => 'required|string|max:255',
        'firstname' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'password' => 'required_with:password_confirmation|string|min:5|max:255',
        'password_confirmation' => 'same:password',
        'gender' => 'required|string|max:50',
        'birth_time' => 'required|date'
    ], [
        'password_confirmation.same' => 'As senhas fornecidas não coincidem.'
    ]);

    if ($validator->fails()) {
        return Redirect::back()->withErrors($validator)->withInput();
    }

        $fullname = $request->input('firstname') . ' ' . $request->input('surname');
        // Execute o INSERT na tabela de usuários
        try {
            DB::table('users')->insert([
                'email' => $request->input('email'),
                'username' => $fullname,
                'password' => Hash::make($request->input('password')),
                'gender' => $request->input('gender'),
                'newsletter' => $request->input('newsletter'),
                'terms_user' => true,
                'birth_time' => $request->input('birth_time'),
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