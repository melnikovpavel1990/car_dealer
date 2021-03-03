<?php

use Illuminate\Database\Seeder;

class CarMarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_marks')->insert([
            'mark' => ['Audi', 'BMW', 'Mercedes-Benz']
        ]);
    }
}
