<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //テーブル名
    protected $table = 'applications';

    //可変項目
    protected $fillable = 
    [
        'name',
        'detail',
        'url',

    ];
    //セミナーモデルと紐付け
    public function seminars(){
    return $this->hasMany(Seminar::class);
    }

}
