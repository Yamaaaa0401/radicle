<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeminarController extends Controller
{
    /**
     * セミナー一覧を表示する
     * @return view
     */
    public function showList()
    ｛
        return view('seminar.list');
    ｝
}
