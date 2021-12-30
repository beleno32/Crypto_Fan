<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Border extends Model
{
    /**
     * Get the user that owns the phone.
     */
    public function games()
    {
        return $this->belongsTo(Games::class);
    }
}