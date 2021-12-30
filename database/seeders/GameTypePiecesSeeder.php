<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameTypePieces extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_type_pieces')->insertOrIgnore([
            ['id' => 1, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'A','pos_axis_y' => 8],
            ['id' => 2, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'A','pos_axis_y' => 6],
            ['id' => 3, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'A','pos_axis_y' => 2],
            ['id' => 4, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'B','pos_axis_y' => 7],
            ['id' => 5, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'B','pos_axis_y' => 3],
            ['id' => 6, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'B','pos_axis_y' => 1],
            ['id' => 7, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'C','pos_axis_y' => 8],
            ['id' => 8, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'C','pos_axis_y' => 6],
            ['id' => 9, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'C','pos_axis_y' => 2],
            ['id' => 10, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'D','pos_axis_y' => 7],
            ['id' => 11, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'D','pos_axis_y' => 3],
            ['id' => 12, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'D','pos_axis_y' => 1],
            ['id' => 13, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'E','pos_axis_y' => 8],
            ['id' => 14, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'E','pos_axis_y' => 6],
            ['id' => 15, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'E','pos_axis_y' => 2],
            ['id' => 16, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'F','pos_axis_y' => 7],
            ['id' => 17, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'F','pos_axis_y' => 3],
            ['id' => 18, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'F','pos_axis_y' => 1],
            ['id' => 19, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'G','pos_axis_y' => 8],
            ['id' => 20, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'G','pos_axis_y' => 6],
            ['id' => 21, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'G','pos_axis_y' => 2],
            ['id' => 22, 'game_id' => 1,'type_piece_id' =>1, 'pos_axis_x' => 'H','pos_axis_y' => 7],
            ['id' => 23, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'E','pos_axis_y' => 3],
            ['id' => 24, 'game_id' => 1,'type_piece_id' =>2, 'pos_axis_x' => 'E','pos_axis_y' => 1],
        ]);

        //
    }
}
