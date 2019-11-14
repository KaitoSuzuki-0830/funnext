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
            'name'=>'user',
            'email'=>'sample@gmail.com',
            'password'=>bcrypt('password')
        ]);;

        Profile::create([
            'user_id'=>$user->id,
            'avatar' =>'uploads/avatar/sample.png',
            'place'=>'Tokyo',
            'about' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At architecto repellat sapiente nemo cupiditate eaque adipisci praesentium laboriosam, commodi assumenda sit quae minus impedit tempora sint amet. Eius, inventore dolore?',
            'facebook' => 'https://www.facebook.com/kati-frantz',
            'instagram'=>'https://www.instagram.com/kati',
            'twitter'=>'https://www.twitter.com/kati'
        ]);
    }
}
