@extends('layout')
@section('title','マイページトップ')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">新規{{ __('Register') }}</div>

                <div class="card-body">
                    @csrf
                    {{--ID非表示--}}
                    <div class="profile-group" hidden="true">
                        <div name="id" class="profile-group__element">{{$auth->id}}</div>
                    </div>
                    {{--メールアドレス入力--}}
                    <div class="profile-group">
                        <div class="col-md-6">
                            <label class="profile-group__title">メールアドレス</label>
                            <label name="email" class="profile-group__element">{{$auth->email}}</label>
                        </div>
                    </div>

                    {{--ユーザー名入力--}}
                    {{-- <div class="col-md-6">
                        <div class="profile-group">
                            <label class="profile-group__title">ユーザー名</label>
                            <div name="username" class="profile-group__element">{{$auth->username}}</div>
            </div>
        </div> --}}

        {{--名字入力--}}
        <div class="col-md-6">
            <div class="profile-group">
                <label class="profile-group__title">名字</label>
                <label name="family_name" class="profile-group__element">{{$auth->family_name}}</label>
            </div>
        </div>
        {{--名前入力--}}
        <div class="col-md-6">
            <div class="profile-group">
                <label class="profile-group__title">名前</label>
                <label name="given_name" class="profile-group__element">{{$auth->given_name}}</label>
            </div>
        </div>
        {{--性別選択--}}
        <div class="col-md-6">
            <div class="profile-group">
                <label class="profile-group__title">性別</label>
                <label name="mst_gender_id" class="profile-group__element">{{$auth->mst_gender_id}}</label>
            </div>
        </div>
        {{-- <div class="form-inline" id="selectGender" th:field="*{gender}">
                                <label class="radio-inline">
                                    <input type="radio" name="mst_gender_id" checked="checked" value="FEMALE">
                                    <span>女性</span>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="mst_gender_id" value="MALE">
                                    <span>男性</span>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="mst_gender_id" value="OTHER">
                                    <span>その他</span>
                                </label>
                            </div> 

        </div> --}}

        {{--ライセンス登録年度選択--}}
        <div class="col-md-6">
            <div class="profile-group">
                <label class="profile-group__title">登録年度</label>
                <label name="registration_year_id" class="profile-group__element">{{$auth->registration_year_id}}
                </label>
            </div>
        </div>
        {{-- <div class="col-md-6">
                    <label for="registration_year_id" class="col-md-4 col-form-label text-md-right">診療放射線技師
                        登録年度</label>
                    <div class="col-md-6">
                        <select class="form-control" id="registration_year_id" name="registration_year_id">
                            <option value="Y2024">2024年 卒業見込み(学部1年生)</option>
                            <option value="Y2023">2023年 卒業見込み(学部2年生)</option>
                            <option value="Y2022">2022年 卒業見込み(学部3年生)</option>
                            <option value="Y2021">2021年 卒業見込み(学部4年生)</option>
                            <option value="Y2020">2020年 / 令和2年登録(1年目)</option>
                            <option value="Y2019">2019年 / 平成31年/令和元年登録(2年目)</option>
                            <option value="Y2018">2018年 / 平成30年登録(3年目)</option>
                            <option value="Y2017">2017年 / 平成29年登録(4年目)</option>
                            <option value="Y2016">2016年 / 平成28年登録(5年目)</option>
                            <option value="Y2015">2015年 / 平成27年登録(6年目)</option>
                            <option selected="selected" value="Y2014">2014年 / 平成26年登録(7年目)</option>
                            <option value="Y2013">2013年 / 平成25年登録(8年目)</option>
                            <option value="Y2012">2012年 / 平成24年登録(9年目)</option>
                            <option value="Y2011">2011年 / 平成23年登録(10年目)</option>
                            <option value="Y2010">2010年 / 平成22年登録(11年目)</option>
                            <option value="Y2009">2009年 / 平成21年登録(12年目)</option>
                            <option value="Y2008">2008年 / 平成20年登録(13年目)</option>
                            <option value="Y2007">2007年 / 平成19年登録(14年目)</option>
                            <option value="Y2006">2006年 / 平成18年登録(15年目)</option>
                            <option value="Y2005">2005年 / 平成17年登録(16年目)</option>
                            <option value="Y2004">2004年 / 平成16年登録(17年目)</option>
                            <option value="Y2003">2003年 / 平成15年登録(18年目)</option>
                            <option value="Y2002">2002年 / 平成14年登録(19年目)</option>
                            <option value="Y2001">2001年 / 平成13年登録(20年目)</option>
                            <option value="Y2000">2000年 / 平成12年登録(21年目)</option>
                            <option value="Y1999">1999年 / 平成11年登録(22年目)</option>
                            <option value="Y1998">1998年 / 平成10年登録(23年目)</option>
                            <option value="Y1997">1997年 / 平成9年登録(24年目)</option>
                            <option value="Y1996">1996年 / 平成8年登録(25年目)</option>
                            <option value="Y1995">1995年 / 平成7年登録(26年目)</option>
                            <option value="Y1994">1994年 / 平成6年登録(27年目)</option>
                            <option value="Y1993">1993年 / 平成5年登録(28年目)</option>
                            <option value="Y1992">1992年 / 平成4年登録(29年目)</option>
                            <option value="Y1991">1991年 / 平成3年登録(30年目)</option>
                            <option value="Y1990">1990年 / 平成2年登録(31年目)</option>
                            <option value="Y1989">1989年 / 平成元年登録(32年目)</option>
                            <option value="Y1988">1988年 / 昭和63年登録(33年目)</option>
                            <option value="Y1987">1987年 / 昭和62年登録(34年目)</option>
                            <option value="Y1986">1986年 / 昭和61年登録(35年目)</option>
                            <option value="Y1985">1985年 / 昭和60年登録(36年目)</option>
                            <option value="Y1984">1984年 / 昭和59年登録(37年目)</option>
                            <option value="Y1983">1983年 / 昭和58年登録(38年目)</option>
                            <option value="Y1982">1982年 / 昭和57年登録(39年目)</option>
                            <option value="Y1981">1981年 / 昭和56年登録(40年目)</option>
                            <option value="Y1980">1980年 / 昭和55年登録(41年目)</option>
                            <option value="Y1979">1979年 / 昭和54年登録(42年目)</option>
                            <option value="Y1978">1978年 / 昭和53年登録(43年目)</option>
                            <option value="Y1977">1977年 / 昭和52年登録(44年目)</option>
                            <option value="Y1976">1976年 / 昭和51年登録(45年目)</option>
                            <option value="Y1975">1975年 / 昭和50年登録(46年目)</option>
                            <option value="Y1974">1974年 / 昭和49年登録(47年目)</option>
                            <option value="Y1973">1973年 / 昭和48年登録(48年目)</option>
                            <option value="Y1972">1972年 / 昭和47年登録(49年目)</option>
                            <option value="Y1971">1971年 / 昭和46年登録(50年目)</option>
                            <option value="Y1970">1970年 / 昭和45年登録(51年目)</option>
                            <option value="Y1969">1969年 / 昭和44年登録(52年目)</option>
                            <option value="Y1968">1968年 / 昭和43年登録(53年目)</option>
                            <option value="Y1967">1967年 / 昭和42年登録(54年目)</option>
                            <option value="Y1966">1966年 / 昭和41年登録(55年目)</option>
                            <option value="Y1965">1965年 / 昭和40年登録(56年目)</option>
                            <option value="Y1964">1964年 / 昭和39年登録(57年目)</option>
                            <option value="Y1963">1963年 / 昭和38年登録(58年目)</option>
                            <option value="Y1962">1962年 / 昭和37年登録(59年目)</option>
                            <option value="Y1961">1961年 / 昭和36年登録(60年目)</option>
                            <option value="Y1960">1960年 / 昭和35年登録(61年目)</option>
                            <option value="Y1959">1959年 / 昭和34年登録(62年目)</option>
                            <option value="Y1958">1958年 / 昭和33年登録(63年目)</option>
                            <option value="Y1957">1957年 / 昭和32年登録(64年目)</option>
                            <option value="OTHER">その他</option>
                        </select>
                    </div>

                </div> --}}

        {{--勤務先登録--}}
        <div class="col-md-6">
            <div class="profile-group">
                <label class="profile-group__title">先登録</label>
                <label name="workplace" class="profile-group__element">{{$auth->workplace}}
                </label>
            </div>
        </div>

        {{--都道府県選択--}}
        <div class="col-md-6">
            <div class="profile-group">
                <label class="profile-group__title">都道府県</label>
                <label name="mst_prefecture_code_id" class="profile-group__element">
                    {{$auth->mst_prefecture_code_id}}
                </label>
            </div>
        </div>
        {{-- <div class="col-md-6">
                    <label for="mst_prefecture_code_id" class="col-md-4 col-form-label text-md-right">勤務先の都道府県</label>
                    <div class="col-md-6">
                        <select class="form-control" id="mst_prefecture_code_id" name="mst_prefecture_code_id">
                            <option value="999">未登録</option>
                            <option value="1">北海道</option>
                            <option value="2">青森県</option>
                            <option value="3">岩手県</option>
                            <option value="4">宮城県</option>
                            <option value="5">秋田県</option>
                            <option value="6">山形県</option>
                            <option value="7">福島県</option>
                            <option value="8">茨城県</option>
                            <option value="9">栃木県</option>
                            <option value="10">群馬県</option>
                            <option value="11">埼玉県</option>
                            <option value="12">千葉県</option>
                            <option value="13">東京都</option>
                            <option value="14">神奈川県</option>
                            <option value="15">新潟県</option>
                            <option value="16">富山県</option>
                            <option value="17">石川県</option>
                            <option value="18">福井県</option>
                            <option value="19">山梨県</option>
                            <option value="20">長野県</option>
                            <option value="21">岐阜県</option>
                            <option value="22">静岡県</option>
                            <option value="23">愛知県</option>
                            <option value="24">三重県</option>
                            <option value="25">滋賀県</option>
                            <option value="26">京都府</option>
                            <option value="27">大阪府</option>
                            <option value="28">兵庫県</option>
                            <option value="29">奈良県</option>
                            <option value="30">和歌山県</option>
                            <option value="31">鳥取県</option>
                            <option value="32">島根県</option>
                            <option value="33">岡山県</option>
                            <option value="34">広島県</option>
                            <option value="35">山口県</option>
                            <option value="36">徳島県</option>
                            <option value="37">香川県</option>
                            <option value="38">愛媛県</option>
                            <option value="39">高知県</option>
                            <option value="40">福岡県</option>
                            <option value="41">佐賀県</option>
                            <option value="42">長崎県</option>
                            <option value="43">熊本県</option>
                            <option value="44">大分県</option>
                            <option value="45">宮崎県</option>
                            <option value="46">鹿児島県</option>
                            <option value="47">沖縄県</option>
                            <option value="48">海外</option>
                        </select>
                    </div>

                </div> --}}


        {{--肩書登録--}}
        <div class="col-md-6">
            <div class="profile-group">
                <label class="profile-group__title">肩書</label>
                <label name="title" class="profile-group__element">
                    {{$auth->title}}
                </label>
            </div>
        </div>

        {{--専門資格登録--}}
        <div class="col-md-6">
            <div class="profile-group">
                <label class="profile-group__title">肩書</label>
                <label name="qualification" class="profile-group__element">
                    {{$auth->qualification}}
                </label>
            </div>
        </div>


        {{-- <div class="col-md-6 mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
        </button>
    </div>
</div> --}}
</div>
</div>
</div>
</div>
</div>
</div>
@endsection