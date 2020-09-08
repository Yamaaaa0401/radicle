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
//セミナー一覧画面を表示
Route::get('/', 'SeminarController@showList')->name('seminars');
//セミナー詳細画面を表示
Route::get('/seminar/{id}', 'SeminarController@showDetail')->name('showSeminar');
 