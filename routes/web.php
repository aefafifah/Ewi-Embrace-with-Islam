<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\HadistController;
use App\Http\Controllers\MemController;
use App\Http\Controllers\PremiumController;

Route::get('/', function () {
    return view('index');
});


//Quran

Route::get('quran', [QuranController::class, 'index']);
Route::get('quran/{id}', [QuranController::class, 'indexId'])->name('quran.indexId');


//Hadist
Route::get('hadist', [HadistController::class, 'index']);

//issolution
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
Route::get('/memorizinspire', function () {
    return view('memorizinspire');
});
Route::post('/verse/save-progress', [MemController::class, 'store']);
Route::get('/memorizinspire/{id}', [MemController::class, 'indexId'])->name('memorizinspire');
