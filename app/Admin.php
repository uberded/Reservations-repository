<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use Notifiable;

    // ソフトデリートを有効化し日付へキャスト
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
