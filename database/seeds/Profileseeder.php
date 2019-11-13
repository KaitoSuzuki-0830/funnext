<?php

use App\Http\Controllers\ProfilesController;
use Illuminate\Database\Seeder;
use App\User;
use App\Profile;

class Profileseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'kaito',
            'email'=>'kaito@gmail.com',
            'password'=>bcrypt('password')
        ]);

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
