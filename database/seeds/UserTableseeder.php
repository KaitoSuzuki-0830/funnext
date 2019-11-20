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
            'avatar' =>'uploads/avatar/sample.png',
            'about' => '自己紹介を記入してください。より具体的に書くことであなたことをより理解できるプロフィールになります。',
            'facebook' => 'https://www.facebook.com/',
            'twitter'=>'https://www.twitter.com/',
            'instagram'=>'webサイトを追加する'
        ]);
    }
}
