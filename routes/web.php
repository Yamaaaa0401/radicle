<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//ユーザー登録画面を表示
Route::get('/', 'SeminarController@showList')
->name('seminars');

//セミナー一覧画面を表示
Route::get('/', 'SeminarController@showList')
->name('seminars');

//セミナー登録画面を表示
Route::get('/seminar/create', 'SeminarController@showCreate')
->name('createSeminar');

//セミナー登録
Route::post('/seminar/store', 'SeminarController@exeStore')
->name('storeSeminar');

//セミナー詳細画面を表示  ここよりも上に登録画面をつくる
Route::get('/seminar/{id}', 'SeminarController@showDetail')
->name('showSeminar');

// Auth::routes();
Auth::routes(['register' => false 
// ユーザ登録機能をオフに切替
]);

// 自作ユーザー登録画面を表示
Route::get('/register', 'Auth\RegisterController@getRegister')
->name('register');

//ユーザー登録
Route::post('/register', 'Auth\RegisterController@postRegister')
->name('register');


// パスワード変更通常のアクセス（GET）の場合↓メソッド
Route::get('/setting/password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('password.form');
// パスワード変更の処理（POST）の場合は↓メソッド
Route::post('/setting/password', 'Auth\ChangePasswordController@changePassword')->name('password.change');

//アカウント削除のアクセス
Route::get('/setting/deactive', 'Auth\DeactiveController@showDeactiveForm')->name('deactive.form');
//アカウント削除
Route::post('/setting/deactive', 'Auth\DeactiveController@deactive')->name('deactive');

Route::get('/setting', 'SettingController@index')
->name('setting');

Route::get('/home', 'HomeController@index')
->name('home');
