<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Http\Requests\RegisterRequest;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function createForm()
    {
        return view('auth.page.register');
    }

    public function auth(RegisterRequest $request)
    {
        $validated = $request->validated();
        $fullname = $validated['firstname'] . ' ' . $validated['surname'];

        try {
            // Insira o usuário no banco de dados
            $userId = DB::table('users')->insertGetId([
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

            // Autentique o usuário após o cadastro
            Auth::loginUsingId($userId);
        } catch (QueryException $e) {
            $errorCode = $e->getMessage();
            $errorRegex = "/SQLSTATE\[23505\]: Unique violation/";

            if (preg_match($errorRegex, $errorCode)) {
                $errorMessage = 'O email já cadastrado.';
            } else {
                $errorMessage = 'Ocorreu um erro. Tente novamente mais tarde.';
                dd($errorCode); // Lidar com outras exceções, se necessário
            }

            return view('auth.page.register')->with('errorMessage', $errorMessage);
        }

        // Redirecione para uma página de sucesso ou exiba uma mensagem
        return redirect()->route('index')->with('success', 'Registro concluído com sucesso!');
    }
}
