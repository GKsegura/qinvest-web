<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Test;

class UserController extends Controller
{
    public function viewProfile(Request $request)
    {
        $userId = 3;
        $name = User::find($userId);
        $email = User::where('id', $userId)->value('email');
        $birthtime = User::where('id', $userId)->value('birth_time');
        $gender = User::where('id', $userId)->value('gender');
        $investor = Test::where('user_id', $userId)->value('investor_id');
        $user = User::find(3);
        $tests = Test::find(3);

        if ($investor == 2) {
            $perfil_investidor = 'Conservador';
        } elseif ($investor == 3) {
            $perfil_investidor = 'Moderado';
        } elseif ($investor == 4) {
            $perfil_investidor = 'Agressivo';
        }

        return view('pages.userprofile', compact('user', 'tests'));
    }
}
?>