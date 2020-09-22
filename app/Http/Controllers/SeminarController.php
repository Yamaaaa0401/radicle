<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
//SeminarRequest.phpからnamespace,clasのコピーを行なう
use App\Http\Requests\SeminarRequest;
use App\Models\Mst_prefectures_code;
use App\Models\Mst_format;


class SeminarController extends Controller
{
    /**
     * セミナー一覧を表示する
     * @return view
     */
    public function showList()
    {

        $seminars = Seminar::with('mst_format','mst_prefectures_code')->get();//都道府県DB、開催形式DBからデータを取ってくる
        // dd($mst_formats);

        return view('seminar.list') -> with ('seminars' , $seminars );//都道府県データと開催形式データをまとめてlist(一覧へ表示したい) 
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

        \DB::beginTransaction();
        //エラーの表示
        try{
            //セミナーを登録
            Seminar::create($inputs);
            \DB::commit();
        }catch(\Throwable $e){
            //できたらここでログを出力する（未）
            \DB::rollback();
            abort(500);
        }


        \Session::flash('err_msg','ブログを登録しました');
        return redirect(route('seminars'));
    }


}
