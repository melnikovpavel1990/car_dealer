<?php

use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'location' => ['Бресткая', 'Витебская', 'Гомельская', 'Гродненская','Минская', 'Могилевская']
        ]);
    }
}
