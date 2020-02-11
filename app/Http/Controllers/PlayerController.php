<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;

class PlayerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show($id) {
        $player = Player::with('teams')->find($id);
        $team = Team::where('id', $player->team_id)->first();
        \Log::info($team);
        return view('players.show', compact('player', 'team'));
    }
}
