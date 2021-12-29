<?php

namespace Database\Seeders;

use App\Models\Border;
use Illuminate\Database\Seeder;

class BorderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        Border::Create([
            'name' => 'Damas',
            'height' => 8,    
            'width' => 8,
        ]);
    

            
    }
}
