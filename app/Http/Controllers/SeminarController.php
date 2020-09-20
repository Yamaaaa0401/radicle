<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
//SeminarRequest.phpからnamespace,clasのコピーを行なう
use App\Http\Requests\SeminarRequest;
use App\Models\Mst_prefectures_code;


class SeminarController extends Controller
{
    //(M)SeminarModelを呼び出す
    //(C)ControllerからBladeに渡す
    //(V)Bladeで表示する
    /**
     * セミナー一覧を表示する
     * @return view
     */
    public function showList()
    {
        $seminars = Seminar::with('mst_prefectures_code')->get();
        return view('seminar.list') -> with ('seminars' , $seminars);
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
     * セミナー登録画面を表示する
     *
     * @return view
     */
    public function showCreate(){
        $prefectures = Mst_prefectures_code::orderBy('id','asc')->get();
// dd($prefectures);
return view('seminar.seminar_form') -> with ('prefectures' , $prefectures );
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
