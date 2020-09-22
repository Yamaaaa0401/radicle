<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
//SeminarRequest.phpからnamespace,clasのコピーを行なう
use App\Http\Requests\SeminarRequest;
use App\Models\Mst_prefectures_code;
use App\Models\Mst_format;
use App\Models\Biz_user;
use App\Models\Application;
use App\Models\Mst_seminar_contract;


class SeminarController extends Controller
{
    /**
     * セミナー一覧を表示する
     * @return view
     */
    public function showList()
    {

        $seminars = Seminar::with('mst_format','mst_prefectures_code','biz_user','mst_seminar_contract')->get();
        // dd($seminars);

        return view('seminar.list') -> with ('seminars' , $seminars );
        // return view('seminar.list') -> with ('seminars' , $seminars );
        }


    /**
     * セミナー登録画面を表示する
     *
     * @return view
     */
    public function showCreate(){
        $prefectures = Mst_prefectures_code::orderBy('id','asc')->get();
        $formats = Mst_format::orderBy('id','asc')->get();
        // dd($formats);

        // return view('seminar.seminar_form') -> with ('prefectures' , $prefectures );
        return view('seminar.seminar_form',compact('prefectures','formats'));
    }

    /**
     * セミナー詳細を表示する
     * @param int $id
     * @return view
     */
    public function showDetail($id)
    {
        $seminar = Seminar::find($id);

        if(is_null($seminar)){
            \Session::flash('err_msg','データがありません。');
            return redirect(route('seminars'));
        }

        return view('seminar.seminar_detail',['seminar' => $seminar]);//詳細は単数形
    }
    /**
     * セミナー登録する
     *
     * @return view
     */
    //バリデーション：Request−＞SeminarRequestに変える
    public function exeStore(SeminarRequest $request)
    {
        //セミナーデータを受け取る
        $inputs = $request->all();
        // dd( $request->all());
        \DB::beginTransaction();
        //エラーの表示
        try{
            //セミナーを登録
            Seminar::create($inputs);
            // dd( $request->all());
            \DB::commit();
            }catch(\Throwable $e){
            \DB::rollback();
            abort(500);
        }


        \Session::flash('err_msg','ブログを登録しました');
        return redirect(url("/"));
    }


}
