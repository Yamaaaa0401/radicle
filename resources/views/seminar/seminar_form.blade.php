@extends('layout')
@section('title', 'セミナー登録')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>セミナー投稿フォーム</h2>
        <form method="POST" action="{{ url('/seminar/store') }}" onSubmit="return checkSubmit()">
            @csrf
            {{-- //ここからラジクル --}}
            <div class="form-group">
                <label for="mst_formats">
                    開催形式
                </label>
                <select name="mst_prefectures_code_id" class="form-control">
                    <option value="">選択して下さい</option>
                    @foreach($prefectures as $prefecture){{--都道府県1つずつを変数名にする--}}
                    <option value="{{ $prefecture -> id }}">{{$prefecture -> name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('mst_formats'))
                <div class="text-danger">
                    {{ $errors->first('mst_formats') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="biz_users">
                    オンライン開催配信方法
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('biz_users'))
                <div class="text-danger">
                    {{ $errors->first('biz_users') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="eventologist">
                    主催
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('eventologist'))
                <div class="text-danger">
                    {{ $errors->first('eventologist') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name">
                    セミナー名
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="lead">
                    記事の説明
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('lead'))
                <div class="text-danger">
                    {{ $errors->first('lead') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="seminar_date">
                    開催日
                </label>
                {{-- <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                --}}
                <input type="date" id="seminar_date" name="seminar_date">
                @if ($errors->has('seminar_date'))
                <div class="text-danger">
                    {{ $errors->first('seminar_date') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="seminar_time">
                    開催時間
                </label>
                {{-- <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                --}}
                <input type="time" name="seminar_time" style="width:80px" id="seminar_time" value="15:00" min="0:00"
                    max="23:59" step="900">
                〜
                <input type="time" name="seminar_time" style="width:80px" id="seminar_time" value="17:00" min="0:00"
                    max="23:59" step="900">
                @if ($errors->has('seminar_time'))
                <div class="text-danger">
                    {{ $errors->first('seminar_time') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="capacity">
                    定員
                </label>
                {{-- <textarea id="capacity" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                --}}
                <input type="number" id="capacity" name="capacity" value="100" min="0" max="99999" step="1"> 名
                @if ($errors->has('capacity'))
                <div class="text-danger">
                    {{ $errors->first('capacity') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="capacity_supplement">
                    定員補足
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('capacity_supplement'))
                <div class="text-danger">
                    {{ $errors->first('capacity_supplement') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="seminar_description">
                    セミナー概要
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('seminar_description'))
                <div class="text-danger">
                    {{ $errors->first('seminar_description') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="mst_prefectures_code_id">
                    都道府県
                    {{-- 別テーブルに接続 mst_prefecture_code_id --}}
                </label>
                <select name="mst_format_id" class="form-control">
                    <option value="">選択して下さい</option>
                    @foreach($prefectures as $prefecture){{--都道府県1つずつを変数名にする--}}
                    <option value="{{ $prefecture -> id }}">{{$prefecture -> name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('mst_prefecture'))
                <div class="text-danger">
                    {{ $errors->first('mst_prefecture') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="address">
                    住所
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('address'))
                <div class="text-danger">
                    {{ $errors->first('address') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="venue">
                    会場
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('venue'))
                <div class="text-danger">
                    {{ $errors->first('venue') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="fee">
                    受講料
                </label>
                {{-- <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                --}}
                <input type="number" id="fee" name="fee" value="500" min="0" max="1000000" step="10">円/1人
                @if ($errors->has('fee'))
                <div class="text-danger">
                    {{ $errors->first('fee') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="subject">
                    対象者
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('subject'))
                <div class="text-danger">
                    {{ $errors->first('subject') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                {{-- //資格は追加できるようにしたい --}}
                <label for="qualification">
                    認定資格名
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('qualification'))
                <div class="text-danger">
                    {{ $errors->first('qualification') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="qualification_point">
                    付与ポイント
                </label>
                {{-- <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                --}}
                <input type="number" id="qualification_point" name="qualification_point" value="1" min="0" max="100"
                    step="1">単位・ポイント
                @if ($errors->has('qualification_point'))
                <div class="text-danger">
                    {{ $errors->first('qualification_point') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="application">
                    申込方法
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('application'))
                <div class="text-danger">
                    {{ $errors->first('application') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="cautionary_point">
                    参加の注意事項
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('cautionary_point'))
                <div class="text-danger">
                    {{ $errors->first('cautionary_point') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="image">
                    紹介写真・画像
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('image'))
                <div class="text-danger">
                    {{ $errors->first('image') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="website">
                    ホームページURL
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('website'))
                <div class="text-danger">
                    {{ $errors->first('website') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                {{-- //カテゴリの登録もできるようにしたい --}}
                <label for="tag">
                    主なカテゴリタグ
                </label>
                <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                @if ($errors->has('tag'))
                <div class="text-danger">
                    {{ $errors->first('tag') }}
                </div>
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('seminars') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    投稿する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection