<?php

use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブル内のデータを一旦全削除
        \Illuminate\Support\Facades\DB::table('article')->truncate();

        // データのインサート
        DB::table('article')->insert([
            [
                'user_id' => 2,
                'title' => 'title1',
                'body' => 'body1',
                'created_at' => '2018-06-10 21:07:31',
                'updated_at' => '2018-06-10 21:07:31'
            ],
            [
                'user_id' => 2,
                'title' => 'title2',
                'body' => 'body2',
                'created_at' => '2018-06-10 21:07:31',
                'updated_at' => '2018-06-10 21:07:31'
            ],
            [
                'user_id' => 2,
                'title' => 'title3',
                'body' => 'body3',
                'created_at' => '2018-06-10 21:07:31',
                'updated_at' => '2018-06-10 21:07:31'
            ]
        ]);
    }
    }
}
