<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Action;

class TypePiece extends Model
{
    use HasFactory;

    protected $fillable = [
       'name'
    ];

    /**
     * The users that belong to the role.
     */
    public function action()
    {
        return $this->belongsToMany(Action::class)->using(TypePiece::class);
    }
    public function games()
    {
        return $this->belongsTo(Games::class);
    }
}

