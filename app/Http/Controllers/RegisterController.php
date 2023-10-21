<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Http\Requests\RegisterRequest;
use Illuminate\Database\QueryException;




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
        } catch (QueryException $e) {
            $errorCode = $e->getMessage();
            $errorRegex = "/SQLSTATE\[23505\]: Unique violation/";
    
            if (preg_match($errorRegex, $errorCode)) {
                $errorMessage = 'O email já cadastrado.';
            } else {
                $errorMessage = 'Ocorreu um erro. Tente novamente mais tarde.';
                dd($errorCode); // Handle other exceptions
            }
    
            return view('auth.page.register')->with('errorMessage', $errorMessage);
        }

        // Redirecione para uma página de sucesso ou exiba uma mensagem
        return redirect()->route('index', 'Registro concluído com sucesso!');
    }
}
