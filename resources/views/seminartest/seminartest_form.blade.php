@extends('layout')
@section('title', 'セミナー登録')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>セミナー投稿フォーム</h2>
        <form method="POST" action="{{ route('storeseminartest') }}" onSubmit="return checkSubmit()">
            @csrf
            {{-- //ここからラジクル --}}

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

                <div class="form-group">
                    <label for="mst_prefecture">
                        都道府県
                        {{-- 別テーブルに接続 mst_prefecture_code_id --}}
                    </label>
                    <textarea id="content" name="content" class="form-control" rows="1">{{ old('content') }}</textarea>
                    @if ($errors->has('mst_prefecture'))
                    <div class="text-danger">
                        {{ $errors->first('mst_prefecture') }}
                    </div>
                    @endif
                </div>

                <div class="mt-5">
                    <a class="btn btn-secondary" href="{{ route('storeseminartest') }}">
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