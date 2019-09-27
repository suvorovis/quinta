<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new \App\Student();
        $student->user_id = 3;
        $student->first_name = 'Ivan';
        $student->last_name = 'Ivanov';
        $student->patronymic = 'Petrovych';
        $student->birthday = '1986-05-23';
        $student->save();
    }
}
