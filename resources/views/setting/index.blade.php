@extends('layout')
@section('title','マイページトップ')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header"><a class="nav-link" href="{{ route('index') }}">{{ ('ユーザー情報変更') }}</a>
                --}}
                <div class="card-header"><a class="nav-link" href="{{ route('showedit') }}">ユーザー情報変更</a>
                    <a class="nav-link" href="{{ route('showedit') }}">パスワード変更</a></div>
                {{-- </div> --}}

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

                    {{--名字入力--}}
                    <div class="col-md-6">
                        <div class="profile-group">
                            <label class="profile-group__title">名前</label>
                            <label name="family_name"
                                class="profile-group__element">{{$auth->family_name}}{{$auth->given_name}}</label>
                        </div>
                    </div>
                    {{--勤務先登録--}}
                    <div class="col-md-6">
                        <div class="profile-group">
                            <label class="profile-group__title">勤務先</label>
                            <label name="workplace" class="profile-group__element">{{$auth->workplace}}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{--切り替えタブの挿入 参考：https://kishiken.com/css/css-tab/--}}
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="home"
                            aria-expanded="true">Tab 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile">Tab 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-controls="profile">Tab 3</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="1-tab">
                        <div class="tab-pane-header">
                            <h2>Navivation Title (Nav-Tab 1)</h2>
                            <h5>Navigation subtitle</h5>
                            <p class="lead">
                                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum vero magni suscipit,
                                    fuga
                                    repellat quaerat eius minima vel, distinctio dignissimos labore esse harum,
                                    consequatur rem
                                    explicabo molestias aliquid saepe autem?</div>
                            </p>
                            <a href="#tab1" target="_blank">Link directly to this tab</a>
                        </div>
                        <p>1: Additional information Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                            excepturi
                            quo aut, maiores saepe aperiam suscipit sed! Amet sed nam ipsam qui at numquam similique
                            esse cupiditate
                            accusamus. Eum, reprehenderit?</p>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="2-tab">
                        <div class="tab-pane-header">
                            <h2>Navivation Title (Nav-Tab 2)</h2>
                            <h5>Navigation subtitle</h5>
                            <p class="lead">
                                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum vero magni suscipit,
                                    fuga
                                    repellat quaerat eius minima vel, distinctio dignissimos labore esse harum,
                                    consequatur rem
                                    explicabo molestias aliquid saepe autem?</div>
                            </p>
                            <a href="#tab2" target="_blank">Link directly to this tab</a>
                        </div>
                        <p>2: Additional information Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                            excepturi
                            quo aut, maiores saepe aperiam suscipit sed! Amet sed nam ipsam qui at numquam similique
                            esse cupiditate
                            accusamus. Eum, reprehenderit?</p>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="3-tab">
                        <div class="tab-pane-header">
                            <h2>Navivation Title (Nav-Tab 3)</h2>
                            <h5>Navigation subtitle</h5>
                            <p class="lead">
                                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum vero magni suscipit,
                                    fuga
                                    repellat quaerat eius minima vel, distinctio dignissimos labore esse harum,
                                    consequatur rem
                                    explicabo molestias aliquid saepe autem?</div>
                            </p>
                            <a href="#tab3" target="_blank">Link directly to this tab</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection