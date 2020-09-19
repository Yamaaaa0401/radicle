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
//セミナー(テスト)名・都道府県のみ表示一覧を表示
Route::get('/','SeminartestController@showlist')
->name('seminartests');


//セミナー登録画面を表示
Route::get('/seminartest/create', 'SeminartestController@showCreate')
->name('createseminartest');

// //セミナー登録
Route::post('/seminartest/store', 'SeminartestController@exeStore')
->name('storeseminartest');

// //セミナー詳細画面を表示  ここよりも上に登録画面をつくる
// Route::get('/seminartest/{id}', 'SeminartestController@showDetail')
// ->name('showSeminartest');
