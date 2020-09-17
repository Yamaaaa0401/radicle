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
        'mst_prefectures_code_id'
    ];
    //都道府県データをセミナーモデルに紐付ける
    public function mst_prefecture_codes(){
        return $this->hasMany(app\Models\Mst_prefectures_code::class,'mst_prefectures_code_id','id');
    }
}
