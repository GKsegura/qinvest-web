<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Test;


class UserController extends Controller
{
    public function viewUser(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;
        $name = User::where('id', $userId)->value('username');
        $email = User::where('id', $userId)->value('email');
        $birthtime = User::where('id', $userId)->value('birth_time');
        $gender = User::where('id', $userId)->value('gender');
        $perfil_investidor = '';

        $latestTest = Test::where('user_id', $userId)->latest('created_at')->first();
        $investor = $latestTest->investor_id;

        if ($investor == 2) {
            $perfil_investidor = 'Conservador';
        } elseif ($investor == 3) {
            $perfil_investidor = 'Moderado';
        } elseif ($investor == 4) {
            $perfil_investidor = 'Agressivo';
        } else {
            $perfil_investidor = 'Não possui perfil investidor';
        }

        return view('pages.userprofile', compact('user', 'latestTest', 'perfil_investidor'));
    }

    public function viewProfileType()
    {
        $user = Auth::user();
        $userId = $user->id;
        $latestTest = Test::where('user_id', $userId)->latest('created_at')->first();
        $investor = $latestTest->investor_id;
        return view('pages.typeinvestor', compact('investor'));
    }
}