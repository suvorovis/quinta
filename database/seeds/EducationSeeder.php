<?php

use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = new \App\Education();
        $education->student_id = 1;
        $education->institute_id = 1;
        $education->speciality_id = 1;
        $education->end_date = '2019-05-22';
        $education->save();
    }
}
