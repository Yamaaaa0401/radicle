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
//セミナー名・都道府県のみ表示一覧を表示
Route::get('/','SeminartestController@showlist')
->name('seminartests');

//セミナー名・都道府県のみ表示一覧を表示
Route::get('/','SeminartestController@showlist')
->name('seminartests');


// //セミナー一覧画面を表示
// Route::get('/', 'SeminarController@showList')
// ->name('seminars');

// //セミナー登録画面を表示
// Route::get('/seminar/create', 'SeminarController@showCreate')
// ->name('createSeminar');

// //セミナー登録
// Route::post('/seminar/store', 'SeminarController@exeStore')
// ->name('storeSeminar');

// //セミナー詳細画面を表示  ここよりも上に登録画面をつくる
// Route::get('/seminar/{id}', 'SeminarController@showDetail')
// ->name('showSeminar');
