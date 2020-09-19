<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminartest;
use App\Models\Mst_prefectures_code;



class SeminartestController extends Controller
{
    
    /**
     * セミナー一覧画面を表示する
     *
     * @return view
     */
    public function showlist(){
        
    $seminartests = Seminartest::with('mst_prefectures_code')->get();
    // dd($seminartests->toArray());

    return view('seminartest.seminarlist') -> with ('seminartests' , $seminartests);
        // return view('seminartest.seminarlist',['seminartests' => $seminartests]);//どちらでもOK
    }

        /**
     * セミナー登録画面を表示する
     *
     * @return view
     */
    public function showCreate(){
       $prefectures = Mst_prefectures_code::orderBy('id','asc')->first();
        // dd($prefectures->toArray());
        return view('seminartest.seminartest_form') -> with ('prefectures' , $prefectures );
    }


}
