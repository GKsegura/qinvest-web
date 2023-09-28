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

        // if ($investor == 2)
        $typeCamps = [
            "id" => "2",
            "type" => "conservador",
            "description" => "Você é uma pessoa que valoriza a segurança e pretende preservar seu patrimônio.
                Talvez não seja do seu interesse viver pelo risco e prefira opções que minimizem
                ao máximo suas chances de perda.",
            "info" => "O perfil conservador é representado pelo urso. Quando os preços estão em queda,
                muitos optam por diminuir seus riscos e procuram investimentos que ofereçam menores
                variações, como os títulos de renda fixa.
                
                Assim como o urso, você aproveita o máximo da estabilidade no mercado e colhe os
                frutos do longo prazo. A sua paciência é a sua melhor qualidade, por isso o retorno deve
                ser calculado desde o início."
        ];
        //arrumar os ifs
        //fazer os outros arrays
        return view('pages.typeinvestor', compact('typeCamps'));
    }
}
