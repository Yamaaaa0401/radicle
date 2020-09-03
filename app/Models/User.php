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
        'qualification'
    ];  
}
