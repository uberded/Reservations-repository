<?php

use Illuminate\Database\Seeder;
use App\Mod;

class ModsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 完全削除
        Mod::truncate();

        // ダミーデータ作成
        $faker = Faker\Factory::create('ja_JP');

        for($i = 0; $i < 100; $i++){
            Mod::create([
                'ObjectId' => $i,
                'Version' => $faker->creditCardNumber,
                'Data' => $faker->address,
                'Register' => $i,
            ]);
        }
    }
}
