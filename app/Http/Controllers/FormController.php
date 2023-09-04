<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
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
        $userId = $request->input('user_id');

        try {
            // Insert the data into the 'tests' table
            DB::table('tests')->insert([
                'deleted' => false,
                'grade' => 0,
                'form_id' => 8,
                'user_id' => $userId,
                'investor_id' => null,
                'created_at' => Carbon::now('America/Sao_Paulo'),
                'updated_at' => null,
            ]);
            // Flash a success message to the session
            session()->flash('home', 'Cadastrado com sucesso');
        } catch (\Exception $e) {
            dd($e->getMessage());
            echo "<script type='text/javascript'>alert('Erro no SQL')</script>";
        }
        
        try {
            DB::table('tests_questions_answers')->insert([
                'test_id' => DB::table('tests')->max('id'),
                'question_id' => 1,
                'answer_id' => $request->input('selected_answer1'),
                'created_at' => Carbon::now('America/Sao_Paulo'),
                'updated_at' => null,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            echo "<script type='text/javascript'>alert('Erro no SQL')</script>";
        }

        // Redirect to the appropriate page after successful submission
        return redirect()->route('home');
    }
}

// $userId = $request->input('user_id');
            // // Validate the input data
            // $validator = Validator::make($request->all(), [
            //     'question_id' => 'required|integer',
            //     'answer_id' => 'required|integer',
            // ], [
            //     'question_id.required' => 'A pergunta não foi informada.',
            //     'answer_id.required' => 'A resposta não foi informada.',
            // ]);
            // if ($validator->fails()) {
            //     return redirect()->back()->withErrors($validator)->withInput();
            // }