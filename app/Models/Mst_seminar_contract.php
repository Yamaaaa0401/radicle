<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mst_seminar_contract extends Model
{
     //テーブル名
    protected $table = 'mst_seminar_contracts';

    //可変項目
    protected $fillable = 
    [
        'name',
    ];
    //セミナーモデルと紐付け
    public function seminars(){
    return $this->hasMany(Seminar::class);
    }

}
