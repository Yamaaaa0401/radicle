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
        'format_id',
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
        'image',
        'website',
        'mst_prefecture_code_id',
        'unit_id',
        'application_id',
        'mst_seminar_contract_id'
    ];
}
