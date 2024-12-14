<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $table = 'matches'; // Set table name if different from default
    protected $fillable = ['team1', 'team2', 'date', 'time']; // Add other columns as needed
}
