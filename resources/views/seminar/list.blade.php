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
      <table class="table table-striped">
        <tr>
          <th>開催形式</th>
          <th>開催日付</th>
          <th>セミナーイメージ</th>
          <th>主催</th>
          <th>開催地</th>
          <th>講座紹介</th>
        </tr>
        @foreach($seminars as $seminar)
        <tr>
          <td>{{$seminar->mst_format->name}}</td>
          <td>{{$seminar->seminar_date }}</td>
          <td><img src="{{ asset( 'storage/app/public/images/' .$seminar->seminar_image_id) }}"
              {{-- <td><img src="{{ asset( 'storage/images/' .$seminar->seminar_image_id) }}" --}}
              style="max-width: 400px; max-height: 400px; text-align:center;"></td>
          {{-- <td><img src="{{ asset( 'storage/images/6lNNi13eqjFVoO5nZqb3cwlh6ouCO1FKEpcrkTTX.png') }}"
          style="max-width: 400px; max-height: 400px;"></td>//この名前ならば表示される --}}
          {{-- <img src="{{ asset('storage/img/' .$event->img) }}" class="rsv_img_size"> --}}
          <td><a href="{{action("SeminarController@showDetail",$seminar->id) }}">{{$seminar->eventologist }}</a></td>
          <td>{{$seminar->mst_prefectures_code->name}}</td>
          <td>{{$seminar->lead }}</td>
        </tr>
        @endforeach
      </table>

    </div>
  </div>
</div>

{{-- テストコード --}}
<div class="container">
  <div class="row pt-5 m-auto">
    <div class="col-md-6 col-lg-4 pb-3">

      <!-- Copy the content below until next comment -->
      <div class="card card-custom bg-white border-white border-0">
        <div class="card-custom-img"
          style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);">
        </div>
        <div class="card-custom-avatar">
          <img class="img-fluid"
            src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg"
            alt="Avatar" />
        </div>
        <div class="card-body" style="overflow-y: auto">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Card has minimum height set but will expand if more space is needed for card body
            content. You can use Bootstrap <a href="https://getbootstrap.com/docs/4.0/components/card/#card-decks"
              target="_blank">card-decks</a> to align multiple cards nicely in a row.</p>
        </div>
        <div class="card-footer" style="background: inherit; border-color: inherit;">
          <a href="#" class="btn btn-primary">Option</a>
          <a href="#" class="btn btn-outline-primary">Other option</a>
        </div>
      </div>
      <!-- Copy until here -->

    </div>
    <div class="col-md-6 col-lg-4 pb-3">

      <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
      <div class="card card-custom bg-white border-white border-0" style="height: 450px">
        <div class="card-custom-img"
          style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);">
        </div>
        <div class="card-custom-avatar">
          <img class="img-fluid"
            src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg"
            alt="Avatar" />
        </div>
        <div class="card-body" style="overflow-y: auto">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">You can also set maximum height on and the card will not expand, instead a scrollbar in
            the card body will appear.</p>
          <p class="card-text">Some example text to show the scrollbar.</p>
          <p class="card-text">Lorem ipsum dolor sit amet, te vix omittam fastidii, enim paulo omnes ea has, illud
            luptatum no qui. Sed ea qualisque urbanitas, purto elit nec te. Possim inermis antiopam ut eum. Eos te zril
            labore laboramus, quem erant nam in. Ut sed molestie
            antiopam. At altera facilisis mel.</p>
        </div>
        <div class="card-footer" style="background: inherit; border-color: inherit;">
          <a href="#" class="btn btn-primary">Option</a>
          <a href="#" class="btn btn-outline-primary">Other option</a>
        </div>
      </div>

    </div>
    <div class="col-md-6 col-lg-4 pb-3">

      <div class="card card-custom bg-white border-white border-0">
        <div class="card-body">
          <img src="http://res.cloudinary.com/d3/image/upload/c_scale,h_450,q_auto:best/color-cards_lorvwg.jpg"
            alt="Colored cards" class="img-fluid">
          <p>You can use this card together with standard Bootstrap 4 cards and use card features on it.</p>
          <p class="h5 text-center pt-3">See the card on GitHub:</p>
          <p class="h1 text-center"><a href="https://github.com/peterdanis/custom-bootstrap-cards" target="_blank"><i
                class="fa fa-github"></i></a></p>

        </div>
      </div>

    </div>
  </div>
</div>
{{-- ここまで --}}
@endsection