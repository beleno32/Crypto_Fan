<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Matches;
use App\Models\Piece;
use Illuminate\Http\Request;

class GamesController extends Controller
{

    public function gameStart($id_game)
    { 
        $match=MatchesController::matchStart(1,1,2);
        $games=Games::find($id_game);
        $gameInfo= ['name'=> $games->names,
                   'height'=> $games->border->height,
                   'width'=> $games->border->width,];
        $games->gametypepiece;

        $gameTypePieces=   $games->gameTypePieces;
        $allPieces=[];
        foreach ($gameTypePieces as $gameTypePiece)
        {
        $piece= new Piece();
        $piece->id_matches=$match->id;
        $piece->pos_axis_x=$gameTypePiece->pos_axis_x;
        $piece->pos_axis_y=$gameTypePiece->pos_axis_y;
        $piece->id_type_pieces=$gameTypePiece->type_piece_id;
        $piece->save();

        $piecesData=(Object)[
            'x'=>$gameTypePiece->pos_axis_x,
            'y'=>$gameTypePiece->pos_axis_y,
            'image'=>$gameTypePiece->typePiece->image,
            'id_pieces'=>$piece->id];
        array_push($allPieces,$piecesData);
        
        }

        return view('games.tabuleiro.boardgames')->with('games', $gameInfo)
        ->with('allPieces',$allPieces);

    }

}
