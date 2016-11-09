<?php

use Illuminate\Database\Seeder;
use App\Object;

class ObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 完全削除
        Object::truncate();

        // ダミーデータ作成
        $faker = Faker\Factory::create('ja_JP');

        for($i = 0; $i < 100; $i++){
            Object::create([
                'MinecraftVersion' => '1.7.10',
                'ObjectType' => 'Mod',
                'ObjectName' => $faker->name,
                'Description' => $faker->text,
                'Developer' => $faker->name,
                'Register' => $i,
            ]);
        }
    }
}
