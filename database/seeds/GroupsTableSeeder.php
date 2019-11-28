<?php

use Illuminate\Database\Seeder;
use App\group;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(group::class,20)->create();
    }
}
