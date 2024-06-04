<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class QuranController extends Controller
{
    // Display the list of Surahs with pagination and search
    public function index(Request $request)
    {
        // Fetch the list of Surahs
        $response = Http::get('https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json');
        $surahs = json_decode($response->body());

        // Get search keyword and other criteria
        $keyword = strtolower($request->input('keyword'));
        $number_of_ayah = $request->input('number_of_ayah');
        $place = strtolower($request->input('place'));
        $type = strtolower($request->input('type'));

        // Filter Surahs based on search criteria
        if ($keyword || $number_of_ayah || $place || $type) {
            $surahs = array_filter($surahs, function ($surah) use ($keyword, $number_of_ayah, $place, $type) {
                return (empty($keyword) || stripos(strtolower($surah->name), $keyword) !== false || 
                       stripos(strtolower($surah->name_translations->id), $keyword) !== false || 
                       stripos(strtolower((string)$surah->number_of_surah), $keyword) !== false) &&
                       (empty($number_of_ayah) || $surah->number_of_ayah == $number_of_ayah) &&
                       (empty($place) || stripos(strtolower($surah->place), $place) !== false) &&
                       (empty($type) || stripos(strtolower($surah->type), $type) !== false);
            });
        }

        // Convert array_filter result to array
        $surahs = array_values($surahs);

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
            'surahs' => $paginatedSurahs,
            'keyword' => $keyword, // Pass the keyword back to the view
            'number_of_ayah' => $number_of_ayah, // Pass the number of ayah back to the view
            'place' => $place, // Pass the place back to the view
            'type' => $type // Pass the type back to the view
        ]);
    }

    public function indexId($id)
    {
        $response = Http::get("https://raw.githubusercontent.com/penggguna/QuranJSON/master/surah/{$id}.json");
        return view('ayat', [
            'response' => json_decode($response)
        ]);
    }
}
