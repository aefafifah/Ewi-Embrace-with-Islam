<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\HadistController;
use App\Http\Controllers\MemController;
use App\Http\Controllers\PremiumController;

Route::get('/', function () {
    return view('index');
});

// Quran
Route::get('quran', [QuranController::class, 'index'])->name('quran.index');
Route::get('quran/{id}', [QuranController::class, 'indexId'])->name('quran.indexId');

// Hadist
Route::get('hadist', [HadistController::class, 'index']);
Route::get('hadist/{book}/{page}', [HadistController::class, 'index']);

// issolution
Route::get('/issolution', function () {
    return view('issolution');
});

Route::get('/shalat', function () {
    return view('shalat');
});

Route::get('/zakat', function () {
    return view('zakat');
});

Route::get('/puasa', function () {
    return view('puasa');
});

Route::get('/haji', function () {
    return view('haji');
});

Route::get('/sabar', function () {
    return view('sabar');
});

Route::get('/taubat', function () {
    return view('taubat');
});

Route::get('/ilmu', function () {
    return view('ilmu');
});

Route::get('/sukses', function () {
    return view('sukses');
});

// end of issolution

Route::get('/kalkulatormal', function () {
    return view('kalkulatormal');
});

Route::get('/kalkulatorfitrah', function () {
    return view('kalkulatorfitrah');
});

// premium
Route::post('/', [PremiumController::class, 'simpanData']);

// memorizinspire
Route::get('/memorizinspire', [MemController::class, 'index']);
Route::get('/test/{id}', [MemController::class, 'indexId'])->name('test.indexId');
Route::post('/memorizinspire', [MemController::class, 'store'])->name('verses.store');
Route::get('/verses', [MemController::class, 'show'])->name('verses.show');
Route::delete('/verses/{day_number}/{hafalan_ayat}', [MemController::class, 'destroy'])->name('verses.destroy');
Route::get('/verses/{day_number}/edit', [MemController::class, 'edit'])->name('verses.edit');
Route::put('/verses/{day_number}', [MemController::class, 'update'])->name('verses.update');



return view('test');

