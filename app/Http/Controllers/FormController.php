<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
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

   public function test(Request $request)
   {
        $sql = "INSERT INTO tests (deleted, grade, form_id, user_id, investor_id, created_at) VALUES (?, ?, ?, ?, ?, ?)";

        $deleted = false;
        $grade = 0;
        $form_id = 8;
        $user_id = 37;
        $investor_id = 1;
        $created_at = Carbon::now('America/Sao_Paulo');
        
        DB::insert($sql, [$deleted, $grade, $form_id, $user_id, $investor_id, $created_at]);

        return redirect()->route('home', "<script type = 'text/javascript'>alert ('Erro no SQL')</script>");
   }
}
