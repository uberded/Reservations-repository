<?php

use Illuminate\Database\Seeder;
use App\Minecraft;

class MinecraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 完全削除
        Minecraft::truncate();

        // ダミーデータ作成
        Minecraft::create([
            'Version' => '1.7.10',
            'Register' => 0,
        ]);
    }
}
