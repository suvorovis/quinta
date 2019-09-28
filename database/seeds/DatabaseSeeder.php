<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Role comes before User seeder here.
        $this->call(RoleTableSeeder::class);
        // User seeder will use the roles above created.
        $this->call(UserTableSeeder::class);
        $this->call(DirectionSeeder::class);
        $this->call(EmployerSeeder::class);
        $this->call(InstituteSeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(SpecialitySeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(EmploymentSeeder::class);

    }
}
