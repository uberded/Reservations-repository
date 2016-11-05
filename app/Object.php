<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Object extends Model
{
    // ソフトデリートを有効化し日付へキャスト
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
