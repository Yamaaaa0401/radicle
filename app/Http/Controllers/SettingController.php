<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mst_prefectures_code;
use App\User;
use App\Http\Requests\ChangeSettingRequest;




class SettingController extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }

    // マイページ表示
        public function index()
    {
    $prefectures = Mst_prefectures_code::orderBy('id','asc')->get();
    $auth = Auth::user();
    //  dd($auth->all());
    return view('setting.index',[ 'auth' => $auth, 'prefectures' => $prefectures ]);
    }

    // ユーザー情報変更ページ表示
    public function showEdit()
    {
    $auth = Auth::user();
    // dd($auth->all());
    return view('setting.edit',[ 'auth' => $auth ]);
    }

    public function postedit(ChangeSettingRequest $request,$id)
    {
       //ValidationはChangeNameRequestで処理
       //氏名変更処理
        $user = Auth::user($id);
                dd($user->all());

        $user->name = $request->get('name');
        $user->family_name = $request->get('family_name');
        $user->given_name = $request->get('given_name');
        $user->mst_gender_id = $request->get('mst_gender_id');
        $user->workplace = $request->get('workplace');
        $user->title = $request->get('title');
        $user->qualification = $request->get('qualification');
        // $user->mst_user_newsletter_id = $request->get('mst_user_newsletter_id');
        // $user->mst_user_authority_id = $request->get('mst_user_authority_id');
        // $user->mst_prefecture_code_id = $request->get('mst_prefecture_code_id');
        // $user->user_avatar_id = $request->get('user_avatar_id');
        // $user->password = $request->get('password');
        dd($user->all());
        $user->save();
        
        \Session::flash('err_msg','セミナーを登録しました');
        return redirect(url("/"));
       //homeにリダイレクト
        // return redirect()->route('index')->with('status', __('Your name has been changed.'));
    }



}
