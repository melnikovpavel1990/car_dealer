<?php

use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'color' => ['Pink', 'Red', 'Blue', 'Dark blue', 'Green', 'Yellow', 'Pink', 'Orange','Black']
        ]);
    }
}
