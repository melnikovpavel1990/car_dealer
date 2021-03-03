<?php

use Illuminate\Database\Seeder;

class CarModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_models')->insert([
            ['mark_id' => 1, 'model'=>'80'],
            ['mark_id' => 1, 'model'=>'100'],
            ['mark_id' => 1, 'model'=>'A4'],
            ['mark_id' => 1, 'model'=>'A5'],
            ['mark_id' => 1, 'model'=>'A6'],
            ['mark_id' => 2, 'model'=>'1er'],
            ['mark_id' => 2, 'model'=>'3er'],
            ['mark_id' => 2, 'model'=>'5er'],
            ['mark_id' => 2, 'model'=>'7er'],
            ['mark_id' => 2, 'model'=>'X5'],
            ['mark_id' => 3, 'model'=>'C-klasse'],
            ['mark_id' => 3, 'model'=>'E-klasse'],
            ['mark_id' => 3, 'model'=>'S-klasse'],
            ]);
    }
}
