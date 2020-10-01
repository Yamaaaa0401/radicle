<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //テーブル名
    protected $table = 'users';
    //可変項目
    protected $fillable =
    [
        'email',
        'name',
        'password',
        'family_name',
        'given_name',
        'workplace',
        'title',
        'qualification',
        'mst_gender_id',
        'registration_year_id',
        'mst_prefecture_code_id',
        'mst_user_newsletter_id',
        'mst_user_authority_id',
        'user_avatar_id'

    ];

    //ユーザーデータをセミナーモデルに紐付ける
public function mst_prefectures_code(){
return $this->belongsTo(Mst_prefectures_code::class);
// return $this->belongsTo('App\Models\Mst_prefectures_code');
}
}
