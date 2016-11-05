<?php

use Illuminate\Database\Seeder;
use App\Plugin;

class PluginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 完全削除
        Plugin::truncate();

        // ダミーデータ作成
        $faker = Faker\Factory::create('ja_JP');

        for($i = 0; $i < 100; $i++){
            Plugin::create([
                'ObjectId' => $i,
                'Version' => $faker->creditCardNumber,
                'Data' => $faker->address,
                'Register' => $i,
            ]);
        }
    }
}
