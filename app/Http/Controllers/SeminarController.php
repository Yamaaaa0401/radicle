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
        //画像ファイルをstorageへ保存する
        $file = $request->file('seminar_image_id')->store('public/images'); //storage>app>publicに入る
        $filename = str_replace('public/images/', '', $file);
        // 画像ファイルが空かチェック
        if(empty($filename)){
            // ファイル名を取得
            $move = $filename->store('public/images/'); //public/upload....
            $file_check_name = ltrim($move, '');
            // $filename = ltrim($move, 'public/images/');

        }else{
            $file_check_name = "";
        }

        //セミナーデータを登録 変数inputs の new Seminarの箱を作ってデータを格納
        $inputs = new Seminar();
        $inputs ->mst_format_id = request('mst_format_id');
        // $inputs ->biz_user_id = request('');
        $inputs ->online_conference = request('online_conference');
        $inputs ->eventologist = request('eventologist');
        $inputs ->name = request('name');
        $inputs ->lead = request('lead');
        $inputs ->seminar_date = request('seminar_date');
        $inputs ->seminar_starttime = request('seminar_time');
        $inputs ->capacity = request('capacity');
        $inputs ->capacity_supplement  = request('capacity_supplement');
        $inputs ->seminar_description  = request('seminar_description');
        $inputs ->venue  = request('venue');
        $inputs ->fee  = request('fee');
        $inputs ->mst_prefectures_code_id  = request('mst_prefectures_code_id');
        $inputs ->address  = request('address');
        $inputs ->venue  = request('venue');
        $inputs ->fee  = request('fee');
        $inputs ->subject  = request('subject');
        $inputs ->qualification  = request('qualification');
        $inputs ->qualification_point  = request('qualification_point');
        $inputs ->unit_id  = request('unit_id');
        $inputs ->application_id  = request('application_id');
        $inputs ->web  = request('');
        $inputs ->seminar_image_id  = $filename;
        $inputs ->website = request('website');
        $inputs ->mst_seminar_contract_id  = request('mst_seminar_contract_id');
        $inputs ->application_name  = request('application_name');
        $inputs ->application_detail  = request('application_detail');
        $inputs ->url  = request('url');
        $inputs ->delivery_url  = request('delivery_url');
        $inputs ->cautionary_point  = request('cautionary_point');
        // $inputs ->tag_id  = request('tag');//中間テーブルの作成必要・・
        $inputs -> save();
        // dd($inputs->all());

        //ここまでセミナーデータの格納

        // $inputs = $request->all();//このとり方は各項目のケアができないので良くない
        // \DB::beginTransaction();
        // //エラーの検証
        //     //セミナーを登録
        //     Seminar::create($inputs);
        //     \DB::commit();
        // //エラーの検証ここまで


        //画像保存テストコード

        //ここまで画像保存テストコード

        //エラーの表示
        // try{
        //     //セミナーを登録
        //     Seminar::create($inputs);
        //     // dd( $request->all());
        //     \DB::commit();
        //     }catch(\Throwable $e){
        //     \DB::rollback();
        //     abort(500);
        // }
        \Session::flash('err_msg','セミナーを登録しました');
        return redirect(url("/"));
    }
}