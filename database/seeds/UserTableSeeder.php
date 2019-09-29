<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_institute = Role::where('name', 'institute')->first();
        $role_employer  = Role::where('name', 'employer')->first();
        $role_student   = Role::where('name', 'student')->first();
        $role_admin     = Role::where('name', 'admin')->first();

        $employee = new User();
        $employee->name = 'PskovGU';
        $employee->email = 'institute@example.com';
        $employee->password = Hash::make('secret');
        $employee->save();
        $employee->roles()->attach($role_institute);

        $manager = new User();
        $manager->name = 'Formoza, LLC';
        $manager->email = 'employer@example.com';
        $manager->password = Hash::make('secret');
        $manager->save();
        $manager->roles()->attach($role_employer);

        $manager = new User();
        $manager->name = 'Ivan Petrovich Ivanov';
        $manager->email = 'student@example.com';
        $manager->password = Hash::make('secret');
        $manager->save();
        $manager->roles()->attach($role_student);

        $manager = new User();
        $manager->name = 'Admin';
        $manager->email = 'admin@example.com';
        $manager->password = Hash::make('secret');
        $manager->save();
        $manager->roles()->attach($role_admin);
    }
}
