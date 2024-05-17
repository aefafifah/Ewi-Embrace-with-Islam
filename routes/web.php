<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\HadistController;

Route::get('/', function () {
    return view('home');
});

//Quran

Route::get('quran',[QuranController::class, 'index']);
Route::get('quran/{id}',[QuranController::class, 'indexId']);

//Hadist
Route::get('hadist',[HadistController::class, 'index']);
