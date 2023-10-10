<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Rating;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Test;
use App\Models\User;
use App\Models\TestAnswer;

class AdminController extends Controller
{
    public function Statistics()
    {
        if (Auth::check() && Auth::user()-> email == 'admin@qinvest.com')
        {
            $testC = Test::where('deleted', false)->where('investor_id', 1);
            $testM = Test::where('deleted', false)->where('investor_id', 2);
            $testA = Test::where('deleted', false)->where('investor_id', 3);

            $activeTestIds = Test::where('deleted', false)->pluck('id')->toArray();
            
            $female = User::where('gender', 'female')->where('deleted', false);
            $male = User::where('gender', 'male')->where('deleted', false);
            $other = User::where('gender', 'other')->where('deleted', false);

            $answersCounts = TestAnswer::selectRaw('answer_id, COUNT(*) as count')
            ->whereIn('test_id', $activeTestIds)
            ->whereIn('answer_id', [7, 8, 9, 10, 11])
            ->groupBy('answer_id')
            ->get();

            $answerA = 0;
            $answerB = 0;
            $answerC = 0;
            $answerD = 0;
            $answerE = 0;
        
            foreach ($answersCounts as $answerCount) 
            {
                if ($answerCount->answer_id == 7) 
                {
                    $answerA += $answerCount->count;
                }
                else if ($answerCount->answer_id == 8)
                {
                    $answerB += $answerCount->count;
                }
                else if ($answerCount->answer_id == 9)
                {
                    $answerC += $answerCount->count;
                }
                else if ($answerCount->answer_id == 10)
                {
                    $answerD += $answerCount->count;
                }
                else if ($answerCount->answer_id == 11)
                {
                    $answerE += $answerCount->count;
                }
            }    

            $answersTotal = $answerA + $answerB + $answerC + $answerD + $answerE;

            $range1 = ($answerA/$answersTotal)*100; 
            $range2 = ($answerB/$answersTotal)*100; 
            $range3 = ($answerC/$answersTotal)*100; 
            $range4 = ($answerD/$answersTotal)*100; 
            $range5 = ($answerE/$answersTotal)*100; 

            $countC = $testC->count();
            $countM = $testM->count();
            $countA = $testA->count();
            $test = $countA + $countC + $countM;
            
            $countFem = $female->count();
            $countMale = $male->count();
            $countOther = $other->count();
            $users = $countFem + $countMale + $countOther;

            $moderado = ($countM/$test)*100;
            $conservador = ($countC/$test)*100;
            $agressivo = ($countA/$test)*100;

            $women = round(($countFem/$users)*100);
            $men = round(($countMale/$users)*100);
            $NI = round(($countOther/$users)*100);

            return view('pages.admin', compact('conservador', 'moderado', 'agressivo', 'test', 'women', 'men', 'NI', 'range1', 'range2', 'range3', 'range4', 'range5'));   
        } 
        else 
        {
            return redirect()->route('index');
        }   
    }
}
