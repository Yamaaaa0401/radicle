<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminartest;

class SeminartestController extends Controller
{
    /**
     * セミナー登録画面を表示する
     *
     * @return view
     */
    public function showlist(){
        
    $seminartests = Seminartest::all();

    return view('seminartest.seminarlist',['seminartests' => $seminartests]);

    }
}
