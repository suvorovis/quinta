<?php

use Illuminate\Database\Seeder;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institute = new \App\Institute();
        $institute->user_id = 1;
        $institute->name = 'PskovGU';
        $institute->save();
    }
}
