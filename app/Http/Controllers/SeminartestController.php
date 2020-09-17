<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminartest;
use App\Models\Mst_prefectures_code;



class SeminartestController extends Controller
{
    /**
     * セミナー登録画面を表示する
     *
     * @return view
     */
    public function showlist(){
        
    $seminartests = Seminartest::with('mst_prefectures_codes')->get();
    $mst_prefectures_codes = Mst_prefectures_code::all();
    dd($seminartests->toArray());
    // return view('seminartest.seminarlist',['seminartests' => $seminartests]);
    Seminartest::with('mst_prefectures_codes')->get();
    return view('seminartest.seminarlist') -> with ('seminartests' , $seminartests);
    }
}
