<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Border;
use App\Models\GameTypePieces;

class Games extends Model
{
    public function border()
    {
        return $this->belongsTo(Border::class);
    }

    public function gameTypePieces()
    {

        return $this->hasMany(GameTypePieces::class,'game_id');

    }
}