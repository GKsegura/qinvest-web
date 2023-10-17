<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\InvestmentRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InvestmentController extends Controller
{
    public function createForm()
    {
        return view('auth.page.investments');
    }
    public function auth(InvestmentRequest $request)
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
}
