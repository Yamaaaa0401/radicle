<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mst_prefectures_code extends Model
{

        //テーブル名
    protected $table = 'mst_prefectures_codes';

    //可変項目
    protected $fillable =
    [
        'name',
        'code'
    ];

    //セミナーテストモデルと紐付け
    public function seminartest(){
         return $this->hasMany(Seminartest::class);
    }
}
