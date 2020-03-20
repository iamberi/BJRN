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
        $role_admin = new Role();
        $role_admin->name ='admin';
        $role_admin->description ='Administrator';
        $role_admin->save();

        $role_reader = new Role();
        $role_reader->name ='reader';
        $role_reader->description ='Nutzer ohne Benutzerkonto';
        $role_reader->save();

        $role_user = new Role();
        $role_user->name ='user';
        $role_user->description ='angemeldeter Nutzer';
        $role_user->save();
    }
}
