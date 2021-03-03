<?php

use Illuminate\Database\Seeder;

class CitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['location_id' => 1, 'city'=>'Брест'],
            ['location_id' => 1, 'city'=>'Пинск'],
            ['location_id' => 2, 'city'=>'Витебск'],
            ['location_id' => 2, 'city'=>'Полоцк'],
            ['location_id' => 3, 'city'=>'Гомель'],
            ['location_id' => 3, 'city'=>'Мозырь'],
            ['location_id' => 4, 'city'=>'Гродно'],
            ['location_id' => 4, 'city'=>'Островец'],
            ['location_id' => 5, 'city'=>'Минск'],
            ['location_id' => 5, 'city'=>'Жодино'],
            ['location_id' => 6, 'city'=>'Могилев'],
            ['location_id' => 6, 'city'=>'Бобруйск'],

        ]);
    }
}
