<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mst_format extends Model
{
    //
     //テーブル名
    protected $table = 'mst_formats';

    //可変項目
    protected $fillable = 
    [
        'name'
    ];
    //セミナーテストモデルと紐付け
public function seminars(){
return $this->hasMany(Seminar::class);

}
}

