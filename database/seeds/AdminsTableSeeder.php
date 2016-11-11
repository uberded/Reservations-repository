<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 完全削除
        Admin::truncate();

        // ダミー管理者を追加
        Admin::create([
            'name' => 'テスト管理者',
            'email' => 'test_admin@example.jp',
            'password' => Hash::make('TestAdmin@example.jp'),
        ]);
    }
}
