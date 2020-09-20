@extends('layout')
@section('title', 'セミナー登録')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>セミナー投稿フォーム</h2>
        <form method="POST" action="{{ url('/seminartest/store') }}" onSubmit="return checkSubmit()">
            @csrf{{--csrf対策--}}
            <div class="form-group">
                <label for="name">
                    セミナー名
                </label>
                <textarea id="name" name="name" class="form-control" rows="1">{{ old('name') }}</textarea>
                @if ($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name') }}
                </div>
                @endif

                <div class="form-group">
                    <label for="mst_prefectures_code_id">
                        都道府県
                        {{-- 別テーブルに接続 mst_prefecture_code_id --}}
                    </label>
                    <select name="mst_prefectures_code_id" class="form-control">
                        <option value="">選択して下さい</option>
                        @foreach($prefectures as $prefecture){{--都道府県1つずつを変数名にする--}}
                        <option value="{{ $prefecture -> id }}">{{$prefecture -> name}}</option>
                        @endforeach
                    </select>


                    @if ($errors->has('mst_prefectures_code_id')){{--<-カラム名--}}
                    <div class="text-danger">
                        {{ $errors->first('mst_prefectures_code_id') }}
                    </div>
                    @endif
                </div>

                <div class="mt-5">
                    <a class="btn btn-secondary" href="{{url('/seminartest/store')}}">
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