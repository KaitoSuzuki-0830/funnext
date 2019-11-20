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
            'about' => '自己紹介を書くことができます',
            'facebook' => 'facebookアカウント追加してください',
            'instagram'=>'その他webリンクを追加する',
            'twitter'=>'Twitterアカウント追加してください'
        ]);
    }
}
