<?php

use Illuminate\Database\Seeder;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $speciality = new \App\Speciality();
        $speciality->institute_id = 1;
        $speciality->direction_id = 1;
        $speciality->name = 'IT technologies';
        $speciality->save();

        $speciality = new \App\Speciality();
        $speciality->institute_id = 1;
        $speciality->direction_id = 2;
        $speciality->name = 'Financial analysis, accounting and audit';
        $speciality->save();
    }
}
