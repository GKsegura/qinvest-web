<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

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
        $conservador = "conservador";
        $agressivo = "agressivo";
        $moderado = "moderado";
        try {
            // Insert the data into the 'tests' table
            DB::table('tests')->insertGetId([
                'deleted' => false,
                'grade' => 0,
                'form_id' => 8,
                'user_id' => $userId,
                'investor_id' => null,
                'created_at' => Carbon::now('America/Sao_Paulo'),
                'updated_at' => null,
            ]);

                for($i = 1; $i <= 6; $i++)
                {
                        // Insert into 'tests_answers' table
                        DB::table('tests_answers')->insert([
                            'test_id' =>  DB::table('tests')->max('id'),
                            'answer_id' => $request->input('selected_answer'.$i),
                            'created_at' => Carbon::now('America/Sao_Paulo'),
                            'updated_at' => null,
                        ]);

                    $rating1 = $request->find('rating')->where('id', $request->input('selected_answer'.$i));
                    $rating2 = $request->find('rating')->where('id', $request->input('selected_answer'.$i));
                    $rating3 = 0;
                    $rating4 = $request->find('rating')->where('id', $request->input('selected_answer'.$i));
                    $rating5 = $request->find('rating')->where('id', $request->input('selected_answer'.$i));
                    $rating6 = $request->find('rating')->where('id', $request->input('selected_answer'.$i));
                    
                    $total_rating = $rating1 + $rating2 + $rating3 + $rating4 + $rating5 + $rating6;

                    if($total_rating <= 90 && $total_rating >= 0  )
                    {
                        $investor_id = $conservador;
                    }

                    if($total_rating <= 150 && $total_rating >= 91)
                    {
                        $investor_id = $moderado;
                    }

                    if($total_rating >= 151)
                    {
                        $investor_id = $agressivo;
                    }
                    
                }
                DB::table('tests')->insertGetId([
                    'grade' => $total_rating,
                ]);

            // Redirect to the appropriate page after successful submission
            return redirect()->route('home')->with('success', 'Cadastrado com sucesso');
        } catch (\Exception $e) {
            // Handle any exceptions
            dd($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Erro no SQL']);
        }
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

?>