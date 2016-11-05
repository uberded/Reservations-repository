<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mod extends Model
{
    // ソフトデリートを有効化し日付へキャスト
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
