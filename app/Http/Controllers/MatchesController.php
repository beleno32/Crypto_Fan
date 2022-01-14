<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matches;

use function PHPUnit\Framework\matches;

class MatchesController extends Controller
{
    static public function matchStart($id_game,$player_1,$player_2)
    {
        Matches::Create([
            'id_game'=> $id_game,
            'id_player_1' => $player_1,
            'id_player_2' => $player_2]);
    }
}
