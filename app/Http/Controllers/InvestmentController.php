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
        if (Auth::check() && Auth::user()-> email == 'admin@qinvest.com')
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
        if (Auth::check() && Auth::user()-> email == 'admin@qinvest.com')
        {
            $validated = $request->validated();
            try {
                DB::table('investments')->insert([
                    'cod_investment' => $validated['cod_investment'],
                    'name_investment' => $validated['name_investment'],
                    'investor_id' => $validated['investor_id'],
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
        if (Auth::check() && Auth::user()-> email == 'admin@qinvest.com')
        {
            $investment = Investment::all();
        }
        else 
        {
            return redirect()->route('index');
        }  
    }
}
