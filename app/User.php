<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
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
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
