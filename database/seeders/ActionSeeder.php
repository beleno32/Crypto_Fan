<?php

namespace Database\Seeders;

use App\Models\ActionTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions')->insertOrIgnore([
            ['id'=>1, 'direction' => 'Noroeste','steps_number'=>1, 'type'=>'mover' ,'is_it_first_action'=>1],
            ['id'=>2, 'direction' => 'Nordeste','steps_number'=>1, 'type'=>'mover' ,'is_it_first_action'=>1],
            ['id'=>3,'direction' => 'Sudoeste','steps_number'=>1, 'type'=>'mover'  ,'is_it_first_action'=>1],
            ['id'=>4,'direction' => 'Sudeste','steps_number'=>1, 'type'=>'mover'   ,'is_it_first_action'=>1],
        ]);
        DB::table('actions')->insertOrIgnore([
            ['id'=>5,'direction' => 'Noroeste', 'steps_number'=>1, 'type'=>'comer', 'dependent_next_action'=>json_encode([9]) , 'is_it_obrigatory'=>1],
            ['id'=>6,'direction' => 'Nordeste','steps_number'=>1, 'type'=>'comer',  'dependent_next_action'=>json_encode([10]), 'is_it_obrigatory'=>1],
            ['id'=>7,'direction' => 'Sudoeste','steps_number'=>1, 'type'=>'comer',  'dependent_next_action'=>json_encode([11]), 'is_it_obrigatory'=>1],
            ['id'=>8,'direction' => 'Sudeste','steps_number'=>1, 'type'=>'comer',   'dependent_next_action'=>json_encode([12]), 'is_it_obrigatory'=>1],

        ]);
        DB::table('actions')->insertOrIgnore([

            ['id'=>9,'direction' => 'Noroeste','steps_number'=>1, 'type'=>'mover', 'next_action'=>json_encode([5,6,7,8])],
            ['id'=>10,'direction' => 'Nordeste','steps_number'=>1, 'type'=>'mover', 'next_action'=>json_encode([5,6,7,8])],
            ['id'=>11,'direction' => 'Sudoeste','steps_number'=>1, 'type'=>'mover', 'next_action'=>json_encode([5,6,7,8])],
            ['id'=>12,'direction' => 'Sudeste','steps_number'=>1, 'type'=>'mover', 'next_action'=> json_encode([5,6,7,8])],
        ]);

    }

}
