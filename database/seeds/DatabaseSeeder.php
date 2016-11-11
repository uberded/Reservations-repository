<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // マスアサインメントを無効化
        Model::unguard();

        // 各クラスを呼び出し
        $this->call(DetailsTableSeeder::class);
        $this->call(ObjectsTableSeeder::class);
        $this->call(ObjectTypesTableSeeder::class);
        $this->call(VersionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);

        // マスアサインメントを有効化
        Model::reguard();
    }
}
