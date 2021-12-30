<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    /**
     * Get the phone associated with the user.
     */
    public function border()
    {
        return $this->hasOne(Border::class);
    }
}