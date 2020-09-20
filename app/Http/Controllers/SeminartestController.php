<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminartest;
use App\Models\Mst_prefectures_code;
use App\Http\Requests\SeminartestRequest;  

class SeminartestController extends Controller
{
    
    /**
     * セミナー一覧画面を表示する
     *
     * @return view
     */
    public function showlist()
    {
        
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
    public function showCreate()
    {
       $prefectures = Mst_prefectures_code::orderBy('id','asc')->get();
        // dd($prefectures);
        return view('seminartest.seminartest_form') -> with ('prefectures' , $prefectures );
    }
        /**
     * セミナーを登録する
     *
     * @return view
     */
    public function exeStore(SeminartestRequest $request)
    {
        //ブログデータを受け取る
        // dd($request->all());
        $inputs = $request->all();

        \DB::beginTransaction();//エラーがあったら登録しない。
        try{
        //ブログを登録
        Seminartest::create($inputs);
        \DB::commit();
        }catch(\Throwable $e){
            \DB::rollback();
            abort(500);
        }

            \Session::flash('err_msg','セミナーを登録しました。');
            return redirect(route('seminartests'));
            }


}
