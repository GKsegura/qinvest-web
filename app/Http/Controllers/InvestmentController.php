<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\InvestmentRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Investment;

class InvestmentController extends Controller
{
    public function createForm()
    {
        if (Auth::check() && in_array(Auth::user()->email, ['admin@qinvest.com', 'josehsegura2004@gmail.com']))
        {
            return view('auth.page.investments');
        }
        else 
        {
            return redirect()->route('index');
        }  

    }
    public function auth(InvestmentRequest $request)
    {
        if (Auth::check() && in_array(Auth::user()->email, ['admin@qinvest.com', 'josehsegura2004@gmail.com']))
        {
            $validated = $request->validated();
            try {
                DB::table('investments')->insert([
                    'cod_investment' => $validated['cod_investment'],
                    'name_investment' => $validated['name_investment'],
                    'recomended' => $request->input('recomended'),
                ]);
            } catch (\Exception $e) {
                dd($e->getMessage());
                echo "<script type = 'text/javascript'>alert ('Erro no SQL')</script>";
            }
            // Redirecione para uma página de sucesso ou exiba uma mensagem
            return redirect()->route('investment');
        }   
        else 
        {
            return redirect()->route('index');
        }   
    }
    public function viewInvestment()
    {
        $recommendedInvestments = Investment::where('recomended', true)
        ->select('cod_investment', 'name_investment')
        // ->take()
        ->get();
        return view('pages.stock', ['recommendedInvestments' => $recommendedInvestments]);
    }
}