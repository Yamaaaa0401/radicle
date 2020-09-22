<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biz_user extends Model
{
    //テーブル名
    protected $table = 'biz_users';
    
    //可変項目
    protected $fillable = 
    [
        'email',
        'group_name',
        'group_name_kana',
        'department',
        'department',
        'name',
        'name_kana',
        'tel',
        'postal',
        'mst_prefecture_code_id',
        'city',
        'address_line',
        'building_name',
        'mst_biz_newsletter_id',
        'password',
        'mst_user_authority_id',
    ];
    //セミナーテストモデルと紐付け
    public function seminars(){
    return $this->hasMany(Seminar::class);
    }
}