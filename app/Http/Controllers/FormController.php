<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;

class FormController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        $answers = Answer::all();

        return view('auth.page.viewformulary', compact('questions', 'answers'));
    }
}
