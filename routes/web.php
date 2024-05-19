<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\HadistController;
use App\Http\Controllers\MemController;
Route::get('/', function () {
    return view('master');
});

//Quran

Route::get('quran',[QuranController::class, 'index']);
Route::get('quran/{id}', [QuranController::class, 'indexId'])->name('quran.indexId');


//Hadist
Route::get('hadist',[HadistController::class, 'index']);

//issolution
Route::get('/issolution', function () {
    return view('issolution');
});

//kalkulator
Route::get('/kalkulator', function () {
    return view('kalkulator');
});

// memorizinspire
Route::get('/memorizinspire', function () {
    return view('memorizinspire');
});
Route::post('/verse/save-progress', [MemController::class, 'store']);
Route::get('/memorizinspire/{id}', [MemController::class, 'indexId'])->name('memorizinspire');
