<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Games;

class GameTypePieces extends Model
{
    use HasFactory;


    public function games()
    {

        return $this->belongsTo(Games::class);
    }

    public function typePiece()
    {
        return $this->belongsTo(TypePiece::class);
    }
}