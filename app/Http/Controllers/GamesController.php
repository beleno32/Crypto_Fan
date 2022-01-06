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

        $gameTypePieces=   $games->gameTypePieces;
        $allPieces=[];
        foreach ($gameTypePieces as $gameTypePiece)
        {
            $piecesData=(Object)[
                'x'=>$gameTypePiece->pos_axis_x,
                'y'=>$gameTypePiece->pos_axis_y,
                'image'=>$gameTypePiece->typePiece->image 
            ];
            array_push($allPieces,$piecesData);
        }

        return view('games.tabuleiro.boardgames')->with('games', $gameInfo)
        ->with('allPieces'," ".json_encode($allPieces));

    }

}
