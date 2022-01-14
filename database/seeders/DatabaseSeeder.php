<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            TypePieceTableSeeder::class,
            BorderSeeder::class,
            GamesSeeder::class,
            GameTypePiecesSeeder::class,
            ActionSeeder::class,
            ActionTypePieceTableSeeder::class,
     ]);
    }
}
