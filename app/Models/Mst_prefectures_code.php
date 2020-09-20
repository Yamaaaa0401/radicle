<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mst_prefectures_code extends Model
{
    //
    //テーブル名
    protected $table = 'Mst_prefectures_code';

    //可変項目
    protected $fillable = 
    [
        //都道府県コード変更はなし
    ];
    //セミナーテストモデルと紐付け
public function seminars(){
return $this->hasMany(Seminar::class);
// return $this->hasMany('App\Models\Seminartest');
}

}
