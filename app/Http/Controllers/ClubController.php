<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function create()
    {
        $enrolled_clubs = Club::count();

        return view('signup', compact('enrolled_clubs'));
    }

    public function store(Request $request)
    {
        // Validate inputs
        $validator = Validator::make($request->all(), [
            'club_name' => 'required|string|max:255',
            'club_code' => 'required|string|max:255',
            'club_rank' => 'required|integer',
            'whatsapp_number' => 'required|string|max:15|regex:/^\+?[1-9]\d{1,14}$/',
            'owner_name' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Remove spaces from the whatsapp number
        $sanitizedNumber = str_replace(' ', '', $request->whatsapp_number);

        // Check if the club_code already exists in the database
        $existingClubCode = Club::where('club_code', $request->club_code)->first();

        if ($existingClubCode) {
            return redirect()->back()
                ->withErrors(['club_code' => 'Yeh Club Code already registered hai.'])
                ->withInput();
        }

        // Extract the last 5 digits of the whatsapp number
        $lastFiveDigits = substr($sanitizedNumber, -5);

        // Check if any club already has a number ending with the same last 5 digits
        $existingClub = Club::where('whatsapp_number', 'LIKE', "%{$lastFiveDigits}")->first();

        if ($existingClub) {
            return redirect()->back()
                ->withErrors(['whatsapp_number' => 'Yeh Phone number ek club ke sath already registered hai.'])
                ->withInput();
        }

        try {
            // Save the club details
            $club = new Club();
            $club->club_name = $request->club_name;
            $club->club_code = $request->club_code;
            $club->club_rank = $request->club_rank;
            $club->whatsapp_number = $sanitizedNumber; // Save the sanitized number
            $club->owner_name = $request->owner_name;
            $club->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create the club. Please try again.');
        }

        return redirect()->route('clubs.index')->with('success', 'Club created successfully!');
    }


}

