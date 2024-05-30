<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class QuranController extends Controller
{
    // Display the list of Surahs with pagination
    public function index(Request $request)
    {
        // Fetch the list of Surahs
        $response = Http::get('https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json');
        $surahs = json_decode($response->body());

        // Current page number
        $page = $request->input('page', 1);

        // Number of items per page
        $perPage = 15;

        // Slice the array to get the items for the current page
        $offset = ($page - 1) * $perPage;
        $currentPageSurahs = array_slice($surahs, $offset, $perPage);

        // Create a LengthAwarePaginator instance
        $paginatedSurahs = new LengthAwarePaginator(
            $currentPageSurahs,
            count($surahs),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        // Pass the paginated data to the 'quran' view
        return view('quran', [
            'surahs' => $paginatedSurahs
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
