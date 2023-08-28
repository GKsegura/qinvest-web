<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;

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
}
