<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HadistController extends Controller
{
    public function index()
    {
        $bukhariResponse = Http::get('https://api.hadith.gading.dev/books/bukhari?range=1-20');
        $muslimResponse = Http::get('https://api.hadith.gading.dev/books/muslim?range=1-20');
        $tirmidziResponse = Http::get('https://api.hadith.gading.dev/books/tirmidzi?range=1-20');
        $nasaiResponse = Http::get('https://api.hadith.gading.dev/books/nasai?range=1-20');
        $abuResponse = Http::get('https://api.hadith.gading.dev/books/abu-daud?range=1-20');
        $ahmadResponse = Http::get('https://api.hadith.gading.dev/books/ahmad?range=1-20');
        $darimiResponse = Http::get('https://api.hadith.gading.dev/books/darimi?range=1-20');
        $ibnuResponse = Http::get('https://api.hadith.gading.dev/books/ibnu-majah?range=1-20');
        $malikResponse = Http::get('https://api.hadith.gading.dev/books/malik?range=1-20');

        $allBooksResponse = Http::get('https://api.hadith.gading.dev/books');

        if ($bukhariResponse->successful() &&
            $muslimResponse->successful() &&
            $tirmidziResponse->successful() &&
            $nasaiResponse->successful() &&
            $abuResponse->successful() &&
            $ahmadResponse->successful() &&
            $darimiResponse->successful() &&
            $ibnuResponse->successful() &&
            $malikResponse->successful() &&
            $allBooksResponse->successful()) {
            
            $bukhariHadiths = $bukhariResponse->json()['data'];
            $muslimHadiths = $muslimResponse->json()['data'];
            $tirmidziHadiths = $tirmidziResponse->json()['data'];
            $nasaiHadiths = $nasaiResponse->json()['data'];
            $abuHadiths = $abuResponse->json()['data'];
            $ahmadHadiths = $ahmadResponse->json()['data'];
            $darimiHadiths = $darimiResponse->json()['data'];
            $ibnuHadiths = $ibnuResponse->json()['data'];
            $malikHadiths = $malikResponse->json()['data'];
            $allBooks = $allBooksResponse->json()['data'];
        } else {
            abort(500, 'Gagal mengambil data dari API');
        }

        return view('hadist', [
            'bukhariHadiths' => $bukhariHadiths,
            'muslimHadiths' => $muslimHadiths,
            'tirmidziHadiths' => $tirmidziHadiths,
            'nasaiHadiths' => $nasaiHadiths,
            'abuHadiths' => $abuHadiths,
            'ahmadHadiths' => $ahmadHadiths,
            'darimiHadiths' => $darimiHadiths,
            'ibnuHadiths' => $ibnuHadiths,
            'malikHadiths' => $malikHadiths,
            'allBooks' => $allBooks
        ]);
    }
}
