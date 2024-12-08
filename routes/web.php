<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;

// Menampilkan halaman home di root URL
Route::get('/', function () {
    return view('home');
});

Route::post('/recommendation', [RecommendationController::class, 'getRecommendation'])->name('recommendation.get');

Route::get('/home', function () {
    return view('home');
});

Route::get('/alurkerja', function () {
    return view('alurkerja');
});

Route::get('/test', function () {
    return view('test');
});
