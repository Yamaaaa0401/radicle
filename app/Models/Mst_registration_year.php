<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mst_registration_years extends Model
{
    //
    //テーブル名
    protected $table = 'mst_registration_years';
    //可変項目
    protected $fillable =
    [

}


    //ユーザーモデルと紐付け
public function users(){
return $this->hasMany(User::class);
// return $this->hasMany('App\Models\Seminartest');
}

}
