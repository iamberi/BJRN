<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name','admin')->first();
        $role_reader = Role::where('name','reader')->first();
        $role_user = Role::where('name','user')->first();

        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@mail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@mail.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role_user);

        $reader = new User();
        $reader->name = 'reader';
        $reader->email = 'reader@mail.com';
        $reader->password = bcrypt('reader');
        $reader->save();
        $reader->roles()->attach($role_reader);
    }
}
