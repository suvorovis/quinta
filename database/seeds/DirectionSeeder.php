<?php

use Illuminate\Database\Seeder;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $direction = new \App\Direction();
        $direction->name = 'IT';
        $direction->save();

        $direction = new \App\Direction();
        $direction->name = 'Finance';
        $direction->save();

        $direction = new \App\Direction();
        $direction->name = 'Accounting';
        $direction->save();
    }
}
