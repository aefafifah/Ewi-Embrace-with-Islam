<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;

Route::get('/', function () {
    return view('welcome');
});

//Quran

Route::get('quran',[QuranController::class, 'index']);
Route::get('quran/{id}',[QuranController::class, 'indexId']);
