<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mst_prefectures_code;


class SettingController extends Controller
{
    //
         public function __construct()
    {
        $this->middleware('auth');
    }

    // ユーザー情報の表示
        public function index()
    {
    $prefectures = Mst_prefectures_code::orderBy('id','asc')->get();
    $auth = Auth::user();

     // dd($auth->all());
    return view('setting.index',[ 'auth' => $auth, 'prefectures' => $prefectures ]);
    }
    // ユーザー情報の変更
    public function edit($id)
    {
    $auth = Auth::user();
    return view('user.edit',[ 'auth' => $auth ]);
    }



}
