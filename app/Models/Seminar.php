<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Seminar extends Model
{
    //テーブル名
    protected $table = 'seminars';

    //可変項目
    protected $fillable = 
    [
        'mst_format_id',
        'biz_user_id',
        'online_conference',
        'eventologist',
        'name',
        'lead',
        'seminar_date',
        'capacity',
        'capacity_supplement',
        'seminar_description',
        'venue',
        'address',
        'fee',
        'subject',
        'qualification',
        'qualification_point',
        'web',
        'seminar_image_id',
        'website',
        'mst_prefectures_code_id',
        'unit_id',
        'application_id',
        'mst_seminar_contract_id',
        'tag',
        'cautionary_point',
        'delivery_url',
        'url',
        'application_detail',
        'application_name',
    ];


    //開催形式データをセミナーモデルに紐付ける
public function mst_format(){
return $this->belongsTo(Mst_format::class);
// return $this->belongsTo('App\Models\Mst_format');
}
    //都道府県データをセミナーモデルに紐付ける
public function mst_prefectures_code(){
return $this->belongsTo(Mst_prefectures_code::class);
// return $this->belongsTo('App\Models\Mst_prefectures_code');
}
    //企業側ユーザーページをセミナーモデルに紐付ける
public function biz_user(){
return $this->belongsTo(Biz_user::class);
// return $this->belongsTo('App\Models\Biz_user');
}
    //申込方法テーブル（application）をセミナーモデルに紐付ける
public function application(){
return $this->belongsTo(Application::class);
// return $this->belongsTo('App\Models\Application');
}
    //契約状態テーブルをセミナーモデルに紐付ける
public function mst_seminar_contract(){
return $this->belongsTo(Mst_seminar_contract::class);
// return $this->belongsTo('App\Models\Mst_seminar_contract');
}
    //セミナー画像テーブルをセミナーモデルに紐付ける
public function seminar_image(){
return $this->belongsTo(Seminar_image::class);
// return $this->belongsTo('App\Models\Seminar_image');
}



}