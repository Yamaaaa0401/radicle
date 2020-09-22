<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mst_prefectures_code extends Model
{
    //
    //テーブル名
    protected $table = 'mst_prefectures_codes';

    //可変項目
    protected $fillable = 
    [
        //都道府県コード変更はなし
    ];
    //セミナーモデルと紐付け
public function seminars(){
return $this->hasMany(Seminar::class);
// return $this->hasMany('App\Models\Seminartest');
}

}
