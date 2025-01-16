<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; // For handling dates and times
use App\Models\Matches; // Import the Match model
use App\Models\Club; // Import the Match model
use App\Models\Round2; // Import the Match model

class MatchController extends Controller
{
    // Show a list of matches
    public function index()
    {
        $matches = Round2::all();
        return view('schedule', compact('matches'));
    }

    public function winner()
    {
        $matches = Matches::all();
        return view('winner', compact('matches'));
    }

    public function winner_store(Request $request)
    {
        // Validate the request
        $request->validate([
            'winner_club' => 'required|string|max:255',
        ]);

        // Find the match by ID
        $match = Matches::find($request->match_id);

        if (!$match) {
            return redirect()->back()->with('error', 'Match not found');
        }

        // Update the winner
        $match->winner = $request->winner_club;
        $match->save();

        return redirect()->back()->with('success', 'Winner updated successfully');
    }

    public function player_id(){
        $clubs = Club::all();
        return view('player_id', compact('clubs'));
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
