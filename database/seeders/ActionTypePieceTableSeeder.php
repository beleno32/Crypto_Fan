<?php

namespace Database\Seeders;

use App\Models\ActionTypePiece;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActionTypePieceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('action_type_pieces')->insertOrIgnore([

            ['piece_id'=>1, 'action_id'=>1],
            ['piece_id'=>1, 'action_id'=>2],
            ['piece_id'=>1, 'action_id'=>3],
            ['piece_id'=>1, 'action_id'=>4],
            ['piece_id'=>1, 'action_id'=>5],
            ['piece_id'=>1, 'action_id'=>6],
            ['piece_id'=>1, 'action_id'=>7],
            ['piece_id'=>1, 'action_id'=>8],
            ['piece_id'=>1, 'action_id'=>9],
            ['piece_id'=>1, 'action_id'=>10],
            ['piece_id'=>1, 'action_id'=>11],
            ['piece_id'=>1, 'action_id'=>12],
            ['piece_id'=>2, 'action_id'=>1],
            ['piece_id'=>2, 'action_id'=>2],
            ['piece_id'=>2, 'action_id'=>3],
            ['piece_id'=>2, 'action_id'=>4],
            ['piece_id'=>2, 'action_id'=>5],
            ['piece_id'=>2, 'action_id'=>6],
            ['piece_id'=>2, 'action_id'=>7],
            ['piece_id'=>2, 'action_id'=>8],
            ['piece_id'=>2, 'action_id'=>9],
            ['piece_id'=>2, 'action_id'=>10],
            ['piece_id'=>2, 'action_id'=>11],
            ['piece_id'=>2, 'action_id'=>12],
        ]);
    }
}

