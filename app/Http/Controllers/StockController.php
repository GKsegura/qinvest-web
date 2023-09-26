<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StockController extends Controller
{
    public function getStockQuotes(Request $request, $tickers, $period)
    {
        $range = $request->input('range', '1d');
        $interval = $request->input('interval', '1d');
        $fundamental = $request->input('fundamental', true);
        $dividends = $request->input('dividends', true);

        $response = Http::get("https://brapi.dev/api/quote/$tickers?token=wF3GuTVktd3VnEZmbp1Ynh", [
            'range' => $range,
            'interval' => $interval,
            'fundamental' => $fundamental,
            'dividends' => $dividends,
        ]);

        $data = $response->json();

        return response()->json($data);
    }
}