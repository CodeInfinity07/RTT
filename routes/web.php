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
Route::get('/schedule', action: [MatchController::class, 'index']);
Route::get('/', [ClubController::class, 'create'])->name('clubs.create');
Route::post('/clubs', action: [ClubController::class, 'store'])->name('clubs.store');
