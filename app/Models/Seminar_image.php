<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seminar_image extends Model
{
    //
    //テーブル名
    protected $table = 'seminar_images';

    //可変項目
    protected $fillable = 
    [
        'seminar_id ',
        'seminar_file_url',
    ];
    //セミナーモデルと紐付け
    public function seminars(){
    return $this->hasMany(Seminar::class);
    }

}
