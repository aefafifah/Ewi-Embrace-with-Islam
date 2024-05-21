<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VerseProgress; // Pastikan Anda mengganti ini dengan model yang sesuai
use Illuminate\Support\Facades\Http;

class MemController extends Controller
{
    // public function indexId($id){
    //     $response = Http::get("https://raw.githubusercontent.com/penggguna/QuranJSON/master/surah/{$id}.json");
    //     // return $response->json();

    //     return view('memorizinspire',[
    //         'response' => json_decode($response)
    //     ]);
    // }


    // public function saveProgress(Request $request)
    // {
    //     // Validasi input dari request jika diperlukan
    //     $validatedData = $request->validate([
    //         'start_index' => 'required|integer',
    //     ]);

    //     // Simpan kemajuan ke database
    //     $verseProgress = new VerseProgress();
    //     $verseProgress->start_index = $validatedData['start_index'];
    //     $verseProgress->save();

    //     return response()->json(['message' => 'Progress saved successfully']);
    // }

    public function store(Request $request)
    {
        // Validasi data yang dikirim dari formulir
        $request->validate([
            'item' => 'required|string|max:255',
            'checked' => 'boolean', // Pastikan nilai yang diterima adalah boolean
        ]);

        // Simpan data ke dalam database menggunakan model Checklist
        Checklist::create([
            'item' => $request->item,
            'checked' => $request->has('checked'),
        ]);

        // Redirect atau berikan respons sesuai kebutuhan aplikasi Anda
    }
}
