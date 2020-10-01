@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{--メールアドレス入力--}}
                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{--ユーザー名入力--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ユーザー名</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{--パスワード入力--}}
                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{--確認用パスワード入力--}}
                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        {{--名字入力--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">姓</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="名字を入力して下さい" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{--名前入力--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">名</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="氏名を入力してください" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{--性別選択--}}
                        <div class="form-group row">
                            <label for="mst_gender_id" class="col-md-4 col-form-label text-md-right">性別</label>
                            <input type=”radio” name="gender" value="mst_gender_id">男性
                            <input type=”radio” name="gender" value="mst_gender_id">女性
                            @error('mst_gender_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                </div>
                {{--ライセンス登録年度選択--}}
                <div class="form-group row">
                    <label for="mst_gender_id" class="col-md-4 col-form-label text-md-right">診療放射線技師 登録年度</label>
                    <select name="mst_gender_id" size="2" autofocus disable multiple ・・・>
                        <option value="1">2014年/平成26年度登録</option>
                        <option value="2">2013年/平成25年度登録</option>
                    </select>
                    @error('mst_gender_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            {{--勤務先登録--}}
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">勤務病院/学校/勤務先</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="ラジくる病院/ラジくる大学/らじくる株式会社" required autocomplete="name" autofocus>


                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            {{--都道府県選択--}}
            <div class="form-group row">
                <label for="mst_gender_id" class="col-md-4 col-form-label text-md-right">勤務病院/学校/勤務先の都道府県</label>
                <select name="mst_gender_id" size="2" autofocus disable multiple ・・・>
                    <option value="1">北海道県</option>
                    <option value="2">青森県</option>
                </select>
                @error('mst_gender_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        {{--勤務先登録--}}
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">肩書</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="学生/講師/教授/マネージャー/〇〇" required autocomplete="name" autofocus>


                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection