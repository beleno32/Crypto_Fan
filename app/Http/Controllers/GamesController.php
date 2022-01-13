<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{

    public function gameStart($id_game)
    {

        $games=Games::find($id_game);
        $gameInfo= ['name'=> $games->names,
                   'height'=> $games->border->height,
                   'width'=> $games->border->width,];
        $games->gametypepiece;
        return view('games.tabuleiro.boardgames')->with('games', $gameInfo);

    }

}
