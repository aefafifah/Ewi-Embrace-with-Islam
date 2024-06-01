<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VerseProgress; // Ensure this model is created
use Illuminate\Support\Facades\Http;

class MemController extends Controller
{
    public function index()
    {
        $response = Http::get('https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json');
        $verses = VerseProgress::all(); // Retrieve all records from the database

        return view('memorizinspire', [
            'response' => json_decode($response),
            'verses' => $verses
        ]);
    }

    public function indexId($id){
        $response = Http::get("https://raw.githubusercontent.com/penggguna/QuranJSON/master/surah/{$id}.json");
        // return $response->json();
        return view('test', [
            'response' => json_decode($response)
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'day_number' => 'required|string',
            'hafalan_ayat' => 'required|array',
            'hafalan_ayat.*' => 'required|string',
            'is_finished' => 'sometimes|array',
            'is_finished.*' => 'sometimes|boolean'
        ]);

        foreach ($data['hafalan_ayat'] as $index => $hafalan_ayat) {
            $verseProgress = new VerseProgress();
            $verseProgress->day_number = $data['day_number'];
            $verseProgress->hafalan_ayat = $hafalan_ayat;
            $verseProgress->is_finished = isset($data['is_finished'][$index]) && $data['is_finished'][$index];

            $verseProgress->save();
        }

        return redirect()->back()->with('success', 'Data successfully saved!');
    }

    public function show()
    {
        // Ambil semua data VerseProgress
        $verseProgresses = VerseProgress::all();

        return view('verses.show', compact('verseProgresses'));
    }

    public function edit($day_number)
    {
        // Cari semua entri dengan day_number yang sama
        $verseProgresses = VerseProgress::where('day_number', $day_number)->get();

        return view('verses.edit', compact('verseProgresses'));
    }

    public function update(Request $request, $day_number)
    {
        // Ambil data yang diperbarui dari permintaan
        $verseProgressData = $request->only('hafalan_ayat', 'is_finished');

        // Loop melalui data yang diperbarui
        foreach ($verseProgressData['hafalan_ayat'] as $id => $hafalan_ayat) {
            // Temukan entri VerseProgress yang sesuai berdasarkan ID
            $verseProgress = VerseProgress::findOrFail($id);

            // Perbarui nilai hafalan_ayat dan is_finished
            $verseProgress->hafalan_ayat = $hafalan_ayat;
            $verseProgress->is_finished = isset($verseProgressData['is_finished'][$id]); // Checkbox akan dikirimkan hanya jika dicentang

            // Simpan perubahan ke database
            $verseProgress->save();
        }

        // Redirect atau kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }


public function destroy($day_number, $hafalan_ayat)
{
    // Cari entri kemajuan ayat berdasarkan day_number dan hafalan_ayat
    $verseProgress = VerseProgress::where('day_number', $day_number)
                                   ->where('hafalan_ayat', $hafalan_ayat)
                                   ->firstOrFail();

    // Hapus entri
    $verseProgress->delete();

    return redirect()->route('verses.show', ['day_number' => $day_number])
                     ->with('success', 'Verse deleted successfully!');
}
}
