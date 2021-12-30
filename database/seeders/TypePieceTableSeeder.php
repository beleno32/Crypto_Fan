<?php

namespace Database\Seeders;

use App\Models\TypePiece;
use Illuminate\Database\Seeder;

class TypePieceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypePiece::create([
            'name'=>'piece_dama',
            'height' => 1,
            'width' => 1,
        ]);
    }
}
