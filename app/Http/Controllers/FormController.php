<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

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
        $rating = Rating::all();

        return view('auth.page.viewformulary', compact('question1', 'question2', 'question3', 'question4', 'question5', 'question6', 'answers'));
    }

    public function auth(Request $request)
    {
        $userId = $request->input('user_id');
        $investor_id = 0;
        $perfil_investidor = '';

        try {
            $testId = DB::table('tests')->insertGetId([
                'deleted' => false,
                'grade' => 0,
                'form_id' => 8,
                'user_id' => $userId,
                'investor_id' => null,
                'created_at' => Carbon::now('America/Sao_Paulo'),
                'updated_at' => null,
            ]);

            for ($i = 1; $i <= 6; $i++) {
                DB::table('tests_answers')->insert([
                    'test_id' => $testId,
                    'answer_id' => $request->input('selected_answer' . $i),
                    'created_at' => Carbon::now('America/Sao_Paulo'),
                    'updated_at' => null,
                ]);
            }

            $selected_answer1 = $request->input('selected_answer1');
            $selected_answer2 = $request->input('selected_answer2');
            $selected_answer3 = $request->input('selected_answer3');
            $selected_answer4 = $request->input('selected_answer4');
            $selected_answer5 = $request->input('selected_answer5');
            $selected_answer6 = $request->input('selected_answer6');

            $rating1 = Answer::where('id', $selected_answer1)->value('rating');
            $rating2 = Answer::where('id', $selected_answer2)->value('rating');
            $rating4 = Answer::where('id', $selected_answer4)->value('rating');
            $rating5 = Answer::where('id', $selected_answer5)->value('rating');
            $rating6 = Answer::where('id', $selected_answer6)->value('rating');

            $total_rating = $rating1 + $rating2 + $rating4 + $rating5 + $rating6;

            if ($total_rating >= 0 && $total_rating <= 90) {
                $perfil_investidor = 'CONSERVADOR';
                $investor_id = 2;
            } elseif ($total_rating >= 91 && $total_rating <= 150) {
                $perfil_investidor = 'MODERADO';
                $investor_id = 3;
            } elseif ($total_rating >= 151) {
                $perfil_investidor = 'AGRESSIVO';
                $investor_id = 4;
            }

            DB::table('tests')->where('id', $testId)->update([
                'grade' => $total_rating,
            ]);

            DB::table('tests')->where('id', $testId)->update([
                'investor_id' => $investor_id,
            ]);

            echo "<script type='text/javascript'>alert('Seu perfil investidor é $perfil_investidor')</script>";
            
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Erro no SQL']);
        }
    }
}
?>
