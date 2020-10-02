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
Auth::routes([
    'register' => false // ユーザ登録機能をオフに切替
]);
// 自作ユーザー登録のための記載
 Route::get('/register', 'Auth\RegisterController@getRegister')->name('register');

 Route::post('/register', 'Auth\RegisterController@postRegister')->name('register');


Route::get('/home', 'HomeController@index')->name('home');
