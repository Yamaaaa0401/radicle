@extends('layout')
@section('title','セミナー一覧')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2>セミナー一覧</h2>
      @if (session('err_msg'))
      <p class="text-danger">
        {{ session('err_msg')}}
      </p>
      @endif
    </div>
  </div>
</div>

{{-- テストコード --}}
<div class="container">
  <div class="row pt-5 m-auto">

    @foreach($seminars as $seminar)
    <div class="col-md-6 col-lg-4 pb-3">

      <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
      <div class="card card-custom bg-white border-white border-0" style="height: 500px">


        {{-- テストリスト --}}
        <div class="list_top">

          <div>
            {{$seminar->mst_format->name}}
          </div>
          <div>
            {{$seminar->created_at}}
          </div>
        </div>
        {{-- テストリスト --}}

        {{-- 参考URL：https://www.it-swarm-ja.tech/ja/css/laravel%E3%81%A7css%E7%94%BB%E5%83%8F%E3%81%AEurl%E3%82%92%E3%83%AA%E3%83%B3%E3%82%AF%E3%81%99%E3%82%8B/829774053/ --}}
        <div class="card-custom-img"
          style="background-image: url({{ asset( 'storage/app/public/images/' .$seminar->seminar_image_id) }});">
        </div>
        <div class="card-custom-avatar">
          <img class="img-fluid"
            {{-- src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" --}}
            src="{{ asset( 'storage/app/public/images/user_２.jpg') }}" alt="Avatar" />
        </div>
        {{-- テストテーブル --}}
        <div style="padding-top:20px">
          <table>
            <th class="seminarlist">セミナー</th>
            <td class="text_inline_block seminarlist">{{$seminar->name}}</td>
          </table>
        </div>
        <div class="card-body" style="overflow-y: auto">
          <table class="table  card-title">
            <th>開催日</th>
            <td>{{$seminar->seminar_date}}</td>
            </tr>
            <tr>
              <th>開催時間</th>
              <td>{{$seminar->seminar_starttime}}</td>
            </tr>
            <tr>
              <th>開催場所</th>
              <td>{{$seminar->mst_prefectures_code->name}}</td>
            </tr>
            <tr>
              <th>費用</th>
              <td>{{$seminar->fee}}</td>
            </tr>
          </table>
          {{-- ここまで --}}
          {{-- <div class="card-body" style="overflow-y: auto"> --}}
          <p class=" card-title">{{$seminar->name}}</p>
          <p class=" card-text">講座紹介</p>
          <p class="card-text">{{$seminar->seminar_description}}</p>
        </div>
        <div class="card-footer" style="background: inherit; border-color: inherit;">
          <a href="{{action("SeminarController@showDetail",$seminar->id) }}" class="btn btn-primary">詳細</a>
          {{-- <a href="#" class="btn btn-outline-primary">Other option</a> --}}
          <p>{{$seminar->name}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
{{-- ここまで --}}
@endsection