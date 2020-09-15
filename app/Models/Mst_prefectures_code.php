<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mst_prefectures_code extends Model
{

        //テーブル名
    protected $table = 'mst_prefecture_codes';

    //可変項目
    protected $fillable =
    [
        'name',
        'code'
    ];
}
