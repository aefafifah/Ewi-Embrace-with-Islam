<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class HadistController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.hadith.gading.dev/books/muslim?range=1-5');

        if ($response->successful()) {
            $hadiths = $response->json()['data'];
        } else {
            abort(500, 'Gagal mengambil data dari API');
        }

        dd($hadiths);

        
        return view('hadist', ['hadiths' => $hadiths]);
    }
}

// class HadistController extends Controller
// {
//     public function index()
//     {
//         $response = Http::get('https://hadithapi.com/api/hadiths', [
//             'apiKey' => config('services.hadith_api.key')
//         ])->json();

//         return view('hadist', [
//             'response' => $response
//         ]);
//     }
//     // public function index()
//     // {
//     //     $response = Http::get('https://hadithapi.com/api/hadiths', [
//     //         'apiKey' => config('services.hadith_api.key')
//     //     ]);

//     //     return $response->json();
//     // }

// }
