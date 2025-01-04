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
Route::get( '/uid', [MatchController::class, 'player_id']);
Route::get( '/match_winner', [MatchController::class, 'winner']);
Route::post('/clubs', [ClubController::class, 'store'])->name('clubs.store');
Route::post('/uid', [ClubController::class, 'id_store'])->name('ids.store');
Route::post('/match_winner', [MatchController::class, 'winner_store'])->name('winner.store');
