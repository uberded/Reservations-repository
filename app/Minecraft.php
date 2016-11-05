<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Minecraft extends Model
{

    // テーブル設定
    protected $table = 'versions';

    // ソフトデリートを有効化し日付へキャスト
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
