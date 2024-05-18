<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HadistController extends Controller
{
    public function index()
    {
        $response = Http::get('https://hadithapi.com/api/hadiths', [
            'apiKey' => config('services.hadith_api.key')
        ])->json();

        return view('hadist', [
            'response' => $response
        ]);
    }
    // public function index()
    // {
    //     $response = Http::get('https://hadithapi.com/api/hadiths', [
    //         'apiKey' => config('services.hadith_api.key')
    //     ]);

    //     return $response->json();
    // }

}
