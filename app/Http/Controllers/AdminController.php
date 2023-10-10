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
        $testC = Test::where('deleted', false)->where('investor_id', 1);
        $testM = Test::where('deleted', false)->where('investor_id', 2);
        $testA = Test::where('deleted', false)->where('investor_id', 3);

        $activeTestIds = Test::where('deleted', false)->pluck('id')->toArray();
        
        $female = User::where('gender', 'female')->where('deleted', false);
        $male = User::where('gender', 'male')->where('deleted', false);
        $other = User::where('gender', 'other')->where('deleted', false);

        $answerA = TestAnswer::where('answer_id', 7)->whereIn('test_id', $activeTestIds);
        $answerB = TestAnswer::where('answer_id', 8)->whereIn('test_id', $activeTestIds);
        $answerC = TestAnswer::where('answer_id', 9)->whereIn('test_id', $activeTestIds);
        $answerD = TestAnswer::where('answer_id', 10)->whereIn('test_id', $activeTestIds);
        $answerE = TestAnswer::where('answer_id', 11)->whereIn('test_id', $activeTestIds);

        $answersTotal = $answerA + $answerB + $answerC + $answerD + $answerE;

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

        return view('pages.admin', compact('conservador', 'moderado', 'agressivo', 'test', 'women', 'men', 'NI', 'answerA'));


        
    }
}
