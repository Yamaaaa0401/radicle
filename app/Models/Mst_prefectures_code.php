<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mst_prefectures_code extends Model
{
    //
    //テーブル名
    protected $table = 'seminars';

    //可変項目
    protected $fillable = 
    [
        //都道府県コード変更はなし
    ];
    //セミナーテストモデルと紐付け
public function seminartests(){
return $this->hasMany(Seminartest::class);
// return $this->hasMany('App\Models\Seminartest');
}

}
