<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seminartest extends Model
{
    //
        //テーブル名
    protected $table = 'seminartests';

    //可変項目
    protected $fillable =
    [
        'name',
        'mst_prefecture_code_id'
    ];
}
