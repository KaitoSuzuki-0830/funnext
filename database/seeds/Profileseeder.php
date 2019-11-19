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
            'name'=>'user',
            'email'=>'exaple@gmail.com',
            'password'=>bcrypt('password')
        ]);

        Profile::create([
            'user_id'=>$user->id,
            'avatar' =>'uploads/avatar/sample.png',
            'place'=>'Tokyo',
            'about' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At architecto repellat sapiente nemo cupiditate eaque adipisci praesentium laboriosam, commodi assumenda sit quae minus impedit tempora sint amet. Eius, inventore dolore?',
            'facebook' => 'facebookアカウント追加してください',
            'instagram'=>'その他webリンクを追加する',
            'twitter'=>'Twitterアカウント追加してください'
        ]);
    }
}
