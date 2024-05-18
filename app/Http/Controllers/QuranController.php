<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuranController extends Controller
{
    // index
    public function index(){
        $response = Http::get('https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json');
        // return $response->json();

        return view('index',[
            'response' => json_decode($response)
        ]);
    }

    public function indexId($id){
        $response = Http::get("https://raw.githubusercontent.com/penggguna/QuranJSON/master/surah/{$id}.json");
        // return $response->json();

        return view('ayat',[
            'response' => json_decode($response)
        ]);
    }

}
