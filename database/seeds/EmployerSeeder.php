<?php

use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employer = new \App\Employer();
        $employer->user_id = 2;
        $employer->name = 'Formoza, LLC';
        $employer->save();
    }
}
