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
        $validator = Validator::make($request->all(), [
            'club_name' => 'required|string|max:255',
            'club_code' => 'required|string|max:255',
            'club_rank' => 'required|integer',
            'whatsapp_number' => 'required|string|max:15',
            'owner_name' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $club = new Club();
        $club->club_name = $request->club_name;
        $club->club_code = $request->club_code;
        $club->club_rank = $request->club_rank;
        $club->whatsapp_number = $request->whatsapp_number;
        $club->owner_name = $request->owner_name;
        $club->save();

        return redirect()->back()->with('success', 'Club created successfully!');
    }
}

