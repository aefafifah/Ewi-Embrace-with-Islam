<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\HadistController;
use App\Http\Controllers\MemController;

Route::get('/', function () {
    return view('index');
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

Route::get('/kalkulatormal', function () {
    return view('kalkulatormal');
});

Route::get('/kalkulatorfitrah', function () {
    return view('kalkulatorfitrah');
});

// memorizinspire
Route::get('/memorizinspire', function () {
    return view('memorizinspire');
});
Route::post('/verse/save-progress', [MemController::class, 'store']);
Route::get('/memorizinspire/{id}', [MemController::class, 'indexId'])->name('memorizinspire');



