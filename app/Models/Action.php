<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypePiece;

class Action extends Model
{
    use HasFactory;

    protected $fillable = [
        'direction', 'steps_number', 'next_action', 'type'
    ];
    public function typepiece()
    {
        return $this->belongsToMany(TypePiece::class)->using(ActionTypePiece::class);
    }
}
