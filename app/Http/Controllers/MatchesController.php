<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matches;

use function PHPUnit\Framework\matches;

class MatchesController extends Controller
{
    static public function matchStart($id_game,$player_1,$player_2)
    {
        $match=new Matches();
        $match->id_game=$id_game;
        $match->id_player_1=$player_1;
        $match->id_player_2=$player_2;
        $match->save();
        return $match;
    }
}
