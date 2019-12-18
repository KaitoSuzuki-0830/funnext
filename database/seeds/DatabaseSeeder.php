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
        //$this->call(UserTableseeder::class);
        //$this->call(Profileseeder::class);
        //$this->call(PrefSeeder::class);
        //$this->call(GroupsTableSeeder::class);
        //$this->call(PlansTableSeeder::class);
        $this->call(CategoryTableSeeder::class);


    }
}
