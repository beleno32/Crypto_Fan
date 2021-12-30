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
            'name'=>'dama_preta'
            
        ]);
        TypePiece::create([
            'name'=>'dama_branca'
        ]);
    }
}
