<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 完全削除
        User::truncate();

        // ダミーユーザーを作成
        User::create([
            'name' => 'テスト太郎',
            'email' => 'test_taro@example.jp',
            'password' => Hash::make('TestTaro@example.jp'),
        ]);
    }
}
