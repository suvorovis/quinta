<?php

use Illuminate\Database\Seeder;

class EmploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employment = new \App\Employment();
        $employment->student_id = 1;
        $employment->profession_id = 3;
        $employment->from = '2019-05-23';
        $employment->organization = 'Formoza, LLC';
        $employment->save();
    }
}
