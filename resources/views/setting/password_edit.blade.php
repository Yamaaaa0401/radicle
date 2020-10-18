@extends('layout')
@section('title','マイページ編集')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ユーザー情報編集</div>
                <div class="card-body">
                    {{-- <form method="post" action="{{ route('postedit') }}"> --}}
                    <form method="post" action="{{ route('postedit', $auth->id) }}">
                        @csrf
                        {{-- <form method="post" action="{{ route('postedit', $auth->id) }}"> --}}

                        {{--パスワード入力--}}
                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $auth->email }}" required autocomplete="email">
                            </div>
                        </div>




                        {{--変更登録--}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ ('  変更  ') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection