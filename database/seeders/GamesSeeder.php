<?php

namespace Database\Seeders;

use App\Models\Games;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * tst2
     * tst
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        Games::Create([
            'name' => 'Damas',
            'border_id' => 1,    
        ]);
    }
}
