<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'institute';
        $role_employee->description = 'An Institute User';
        $role_employee->save();

        $role_manager = new Role();
        $role_manager->name = 'employer';
        $role_manager->description = 'An Employer User';
        $role_manager->save();

        $role_manager = new Role();
        $role_manager->name = 'student';
        $role_manager->description = 'A Student User';
        $role_manager->save();

        $role_manager = new Role();
        $role_manager->name = 'admin';
        $role_manager->description = 'An Admin User';
        $role_manager->save();
    }
}
