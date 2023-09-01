<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function viewFormulary()
    {
        $question1 = Question::find(1);
        $question2 = Question::find(2);
        $question3 = Question::find(3);
        $question4 = Question::find(5);
        $question5 = Question::find(4);
        $question6 = Question::find(6);
        $answers = Answer::all();

        return view('auth.page.viewformulary', compact('question1', 'question2', 'question3', 'question4', 'question5', 'question6', 'answers'));
    }

    public function auth(Request $request)
    {
        // Valide os dados recebidos
        $validator = Validator::make($request->all(), [
            'question_id' => 'required|integer',
            'answer_id' => 'required|integer'
        ], [
            'question_id.required' => 'A pergunta não foi informada.',
            'answer_id.required' => 'A resposta não foi informada.'
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }   
        // Execute o INSERT na tabela de usuários
        try {
            DB::table('tests')->insert([
                'question_id' => $request->input('question_id'),
                'answer_id' => $request->input('answer_id'),
                'created_at' => Carbon::now('America/Sao_Paulo'),
                'updated_at' => null
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            echo "<script type = 'text/javascript'>alert ('Erro no SQL')</script>";
        }
        // Redirecione para uma página de sucesso ou exiba uma mensagem
        return redirect()->route('home', "<script type = 'text/javascript'>alert ('Cadastrado com sucesso')</script>");
    }
}
