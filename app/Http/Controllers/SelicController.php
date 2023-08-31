<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class SelicController extends Controller
{
    public function getSelic(Request $request)
    {
        $url = 'https://brapi.dev/api/v2/prime-rate';
        $country = $request->input('country', 'brazil');
        $historical = $request->input('historical', false);
        $date = Carbon::now()->format('d/m/Y');
        $start = $request->input('start', $date);
        $end = $request->input('end', $date);
        $sortBy = $request->input('sortBy', 'date');
        $sortOrder = $request->input('sortOrder', 'asc');

        $response = Http::get($url, [
            'country' => $country,
            'historical' => $historical,
            'start' => $start,
            'end' => $end,
            'sortBy' => $sortBy,
            'sortOrder' => $sortOrder,
        ]);

        $data = $response->json();

        return response()->json($data);
    }
}
