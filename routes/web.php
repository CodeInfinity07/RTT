<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\MatchController;

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/rules', function () {
    return view('rules');
});
Route::get('/', [MatchController::class, 'index']);
Route::get('/schedule', [MatchController::class, 'index']);
Route::post('/clubs', [ClubController::class, 'store'])->name('clubs.store');
