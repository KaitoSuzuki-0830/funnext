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
            'email'=>'guest@gmail.com',
            'password'=>bcrypt('password')
        ]);;

        Profile::create([
            'user_id'=>$user->id,
            'avatar' =>secure_asset('uploads/avatar/sample.png'),
            'about' => '自己紹介を書くことができます',
            'pref_id'=>1
            // 'facebook' => 'facebookアカウント追加してください',
            // 'instagram'=>'その他webリンクを追加する',
            // 'twitter'=>'Twitterアカウント追加してください'
        ]);

    }
}
