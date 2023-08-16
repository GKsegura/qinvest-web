<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StockController extends Controller
{
    public function getStockQuotes(Request $request, $tickers)
    {
        $range = $request->input('range', '3mo');
        $interval = $request->input('interval', '1d');
        $fundamental = $request->input('fundamental', false);
        $dividends = $request->input('dividends', false);

        $response = Http::get("https://brapi.dev/api/quote/$tickers", [
            'range' => $range,
            'interval' => $interval,
            'fundamental' => $fundamental,
            'dividends' => $dividends,
        ]);

        $data = $response->json();

        return response()->json($data);
    }
}
