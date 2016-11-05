<?php

use Illuminate\Database\Seeder;
use App\Detail;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 完全削除
        Detail::truncate();

        // ダミーデータ作成
        $faker = Faker\Factory::create('ja_JP');

        for($i = 0; $i < 100; $i++){
            Detail::create([
                'ObjectId' => $i,
                'Version' => $faker->creditCardNumber,
                'Data' => $faker->address,
                'Register' => $i,
            ]);
        }
    }
}
