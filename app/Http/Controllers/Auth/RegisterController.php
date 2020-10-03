<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
// use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Mst_prefectures_code;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 自作ユーザー登録部分登録記載部分
    |--------------------------------------------------------------------------
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    
    /**
     * ユーザ登録画面の表示
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getRegister()
    {
        $prefectures = Mst_prefectures_code::orderBy('id','asc')->get();
        return view('auth.register',compact('prefectures'));
    }

    

    /**
     * ユーザ登録機能
     * @param array $data
     * @return unknown
     */
    public function postRegister(Request $data)
    {
        // ユーザ登録処理
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'family_name' => $data['family_name'],
            'given_name' => $data['given_name'],
            'mst_gender_id' => $data['mst_gender_id'],
            'registration_year_id' => $data['registration_year_id'],
            'workplace' => $data['workplace'],
            'title' => $data['title'],
            'qualification' => $data['qualification'],
            'mst_user_newsletter_id' => $data['mst_user_newsletter_id'],
            'mst_user_authority_id' => $data['mst_user_authority_id'],
            'mst_prefecture_code_id' => $data['mst_prefecture_code_id'],
            'user_avatar_id' => $data['user_avatar_id'],
            'password' => Hash::make($data['password']),
             'remember_token' => '1234567890abcdefg',
        ]);
        // dd($data->all());
        // ホーム画面へリダイレクト
        return redirect('/home');
    }


    }
    /*
    |--------------------------------------------------------------------------
    | ここまで自作ユーザー登録部分登録記載部分
    |--------------------------------------------------------------------------
    */




    /*
    |--------------------------------------------------------------------------
    | 初期登録記載部分
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     // $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'firstname' => ['required', 'string', 'max:255'],
    //         'lastname' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
      * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'family_name' => $data['family_name'],
    //         'given_name' => $data['given_name'],
    //         'mst_gender_id' => $data['mst_gender_id'],
    //         'registration_year_id' => $data['registration_year_id'],
    //         'workplace' => $data['workplace'],
    //         'mst_prefecture_code_id' => $data['mst_prefecture_code_id'],
    //         'title' => $data['title'],
    //         'qualification' => $data['qualification'],
    //         'mst_user_newsletter_id' => $data['mst_user_newsletter_id'],
    //         'mst_user_authority_id' => $data['mst_user_authority_id'],
    //         'mst_prefecture_code_id' => $data['mst_prefecture_code_id'],
    //         'user_avatar_id' => $data['user_avatar_id'],
    //         'password' => Hash::make($data['password']),
    //          'remember_token' => '1234567890abcdefg',
    //     ]);
    // }


// }

