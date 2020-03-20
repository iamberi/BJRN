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
        //hier ist wichtig, dass zuerst die RoleTable aufgerufen wird, weil der User die Roles benötigt
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
