<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    //テーブル名
    protected $table = 'tags';

    //可変項目
    protected $fillable =
    [
        'name'
    ];
}
