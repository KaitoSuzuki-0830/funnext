<?php

use Illuminate\Database\Seeder;

class PrefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefectures = [Tokyo,Kyoto];

        foreach($prefectures as $pref){
            Prefecture::create([
                'name' => $pref
            ]);
        }
    }
}
