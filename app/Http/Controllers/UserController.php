<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Test;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

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
        $investor = null;

        if ($latestTest) {
            $investor = $latestTest->investor_id;
        }

        if ($investor == 1) {
            $perfil_investidor = 'Conservador';
        } elseif ($investor == 2) {
            $perfil_investidor = 'Moderado';
        } elseif ($investor == 3) {
            $perfil_investidor = 'Agressivo';
        } else {
            $perfil_investidor = 'Não possui perfil investidor';
        }

        return view('pages.userprofile', compact('user', 'latestTest', 'perfil_investidor'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'newemail' => 'required|email',
            'newname' => 'required',
            'newbirth_time' => 'required|date',
            'newgender' => 'required|in:male,female,other',
        ]);

        DB::table('users')->where('id', $user->id)->update([
            'username' => $request->input('newname'),
            'email' => $request->input('newemail'),
            'gender' => $request->input('newgender'),
            'birth_time' => $request->input('newbirth_time'),
            'updated_at' => Carbon::now('America/Sao_Paulo'),
        ]);
        return redirect()->route('profile');

    }

    public function viewProfileType()
    {
        $user = Auth::user();
        $userId = $user->id;
        $latestTest = Test::where('user_id', $userId)->latest('created_at')->first();
        $investor = $latestTest->investor_id;

        if ($investor == 1) {
            $typeCamps = [
                "id" => "1",
                "type" => "conservador",
                "description" => "Você é uma pessoa que valoriza a segurança e pretende preservar seu patrimônio.
                Talvez não seja do seu interesse viver pelo risco e prefira opções que minimizem
                ao máximo suas chances de perda.",
                "info-paragraph-1" => "O perfil conservador é representado pelo urso. Quando os preços estão em queda,
                muitos optam por diminuir seus riscos e procuram investimentos que ofereçam menores
                variações, como os títulos de renda fixa.",
                "info-paragraph-2" => "Assim como o urso, você aproveita o máximo da estabilidade no mercado e colhe os
                frutos do longo prazo. A sua paciência é a sua melhor qualidade, por isso o retorno deve
                ser calculado desde o início.",
                "background" => "background-conservador",
                "paragraph" => "paragraph-conservador",
                "recommended-1"=> "Certificado de Depósito Bancário (CDB)",
                "recommended-1-url"=>"",
                "recommended-2"=>"Tesouro Nacional",
                "recommended-1-url"=>"",
                "recommended-3"=>"LCI & LCA",
                "recommended-3-url"=>""
            ];
        } elseif ($investor == 2) {
            $typeCamps = [
                "id" => "2",
                "type" => "moderado",
                "description" => "Você é uma pessoa equilibrada, que sabe de suas forças e fragilidades. Talvez, seus
                investimentos sejam diversos, contemplando todas as cores e possibilidades do
                mercado.",
                "info-paragraph-1" => "O perfil moderado é representado pela borboleta. Independente de como o mercado 
                está, o investidor moderado sabe o que deve fazer e, de forma fugaz, sabe arriscar 
                quando o momento permite.",
                "info-paragraph-2" => "Assim como a borboleta, você aproveita as correntes e variações, analisando o melhor 
                caminho para se suceder no mercado financeiro, seja ele de longo ou curto prazo.",
                "background" => "background-moderado",
                "paragraph" => "paragraph-moderado",
                "recommended-1"=> "Debêntures",
                "recommended-1-url"=>"",
                "recommended-2"=>"Tesouro Nacional",
                "recommended-1-url"=>"",
                "recommended-3"=>"Certificado de Depósito Bancário (CDB)",
                "recommended-3-url"=>""
            ];
        } elseif ($investor == 3) {
            $typeCamps = [
                "id" => "3",
                "type" => "agressivo",
                "description" => "Você é uma pessoa corajosa, que está disposta a avançar sem olhar para trás. Seus
                investimentos, assim como você, confrontam o que muitos chamam de risco, pois a
                busca pelo triunfo sobre os números do mercado financeiro é o seu objetivo.",
                "info-paragraph-1" => "O perfil agressivo é representado pelo touro, pois sua força está na alavancagem.
                Talvez, a melhor estratégia para você seja pôr a prova os seus conhecimentos e ousar-se a investir em carteiras complexas e tirar o máximo do potencial delas.",
                "info-paragraph-2" => "Assim como o touro, o investidor agressivo tende a concentrar seus fundos em carteiras
                variáveis, focando seu escopo principalmente em empresas privadas, ações destas que
                muitos consideram indomáveis.",
                "background" => "background-agressivo",
                "paragraph" => "paragraph-agressivo",
                "recommended-1"=> "Ações de Mid Caps",
                "recommended-1-url"=>"",
                "recommended-2"=>"Cripto moedas",
                "recommended-1-url"=>"",
                "recommended-3"=>"Commodities",
                    "recommended-3-url"=>""
            ];
        }

        return view('pages.typeinvestor', compact('typeCamps'));

    }
}