<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;

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
        $seminars = Seminar::all();
        return view('seminar.list',['seminars' => $seminars]);
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
        return view('seminar.seminar_form');

    }

}
