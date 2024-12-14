<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; // For handling dates and times
use App\Models\Matches; // Import the Match model

class MatchController extends Controller
{
    // Show a list of matches
    public function index()
    {
        $matches = Matches::all(); // Fetch all matches
        return view('schedule', compact('matches'));
    }

    public function home(){
        // Get the current time
        $now = Carbon::now('Asia/Karachi');
        $today = $now->toDateString();
        $tomorrow = $now->addDay()->toDateString();
        $currentTime = $now->format('H:i:s');


        // Fetch the most recent match for the banner
        $recentMatch = Matches::where(function($query) use ($today, $currentTime) {
            $query->where('match_date', '>', $today)
                  ->orWhere(function($query) use ($today, $currentTime) {
                      $query->where('match_date', $today)
                            ->where('match_time', '>=', $currentTime);
                  });
        })
        ->orderBy('match_date')
        ->orderBy('match_time')
        ->first();

        $todayMatches = Matches::where('match_date', $today)
            ->orderBy('match_time')
            ->get();

        $tomorrowMatches = Matches::where('match_date', $tomorrow)
            ->orderBy('match_time')
            ->get();


        return view('index', compact('recentMatch', 'todayMatches', 'tomorrowMatches'));
    }
    // Show details of a single match
    public function show($id)
    {
        $match = Matches::findOrFail($id); // Find match by ID
        return view('matches.show', compact('match'));
    }
}
