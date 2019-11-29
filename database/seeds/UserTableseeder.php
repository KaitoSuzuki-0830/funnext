<?php

use Illuminate\Database\Seeder;
use App\Profile;
use App\User;

class UserTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'guest',
            'email'=>'sample@gmail.com',
            'password'=>bcrypt('password')
        ]);;

    }
}
