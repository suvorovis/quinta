<?php

use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $direction_it = \App\Direction::where('name', 'IT')->first();
        $direction_finance = \App\Direction::where('name', 'Finance')->first();
        $direction_accounting = \App\Direction::where('name', 'Accounting')->first();

        $profession = new \App\Profession();
        $profession->name = 'Backend Developer';
        $profession->direction_id = $direction_it;
        $profession->save();

        $profession = new \App\Profession();
        $profession->name = 'Frontend Developer';
        $profession->direction_id = $direction_it;
        $profession->save();

        $profession = new \App\Profession();
        $profession->direction_id = $direction_it;
        $profession->name = 'DevOps';
        $profession->save();

        $profession = new \App\Profession();
        $profession->direction_id = $direction_finance;
        $profession->name = 'Financial Manager';
        $profession->save();

        $profession = new \App\Profession();
        $profession->direction_id = $direction_finance;
        $profession->name = 'Financial Analytic';
        $profession->save();

        $profession = new \App\Profession();
        $profession->direction_id = $direction_accounting;
        $profession->name = 'Head Accountant';
        $profession->save();
    }
}
