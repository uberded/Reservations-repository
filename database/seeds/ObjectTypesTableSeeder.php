<?php

use Illuminate\Database\Seeder;
use App\Type;

class ObjectTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 完全削除
        Type::truncate();

        // ダミーデータ作成
        Type::create([
            'Type' => 'Mod',
            'Register' => 0,
        ]):

        Type::create([
            'Type' => 'Plugin',
            'Register' => 0,
        ]):
    }
}
