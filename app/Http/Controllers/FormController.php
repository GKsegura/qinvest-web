<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class FormController extends Controller
{
    public function showRegisterFormulary()
    {
        return view('auth.page.formulary');
    }

    public function showViewFormulary()
    {
        return view('auth.page.viewformulary');
    }

    public function form(Request $request)
    {
        // Valide os dados recebidos
        try {
            $request->validate([
                'form_name' => 'required|string|max:255',
                'obs' => 'string|max:255',
            ]);
        } catch (\Exception $v) {
            echo "<script type = 'text/javascript'>alert ('Erro na validação')</script>";
        } 

        // Execute o INSERT na tabela de usuários
        try {
            DB::table('forms')->insert([
                'form_name' => $request->input('form_name'),
                'obs' => $request->input('obs')
            ]);
        } catch (\Exception $e) {
            echo "<script type = 'text/javascript'>alert ('Sei lá')</script>";
        }
    }    

    public function alterform()
    {
        $linha = Form::find($id);
        return view('auth.page.viewformulary',compact('linha'));
    }

}
