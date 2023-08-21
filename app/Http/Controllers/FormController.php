<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Answer;
use App\Models\Question;


class FormController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        $answers = Answer::all();

        return view('viewformulary', compact('questions', 'answers'));
    }
}
