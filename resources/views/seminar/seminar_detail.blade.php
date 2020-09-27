@extends('layout')
@section('title','セミナー詳細')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h3>{{ $seminar->name }}</h3>

    <table class="table table-striped">
      <h4>開催情報</h4>
      <h6>
        <span>{{$seminar->created_at}}掲載</span>
      </h6>
      <tr>
        <span><img src="{{ asset( 'storage/images/' .$seminar->seminar_image_id) }}"
            style="max-width: 600px; max-height: 400px;"></span>
      </tr>
      <th>主催</th>
      <td>{{ $seminar->eventologist }}</td>
      </tr>
      <tr>
        <th>開催日</th>
        <td>{{ $seminar->name }}</td>
      </tr>
      <tr>
        <th>開催時間</th>
        <td>{{ $seminar->seminar_date }}</td>
      </tr>
      <tr>
        <th>費用</th>
        <td>{{ $seminar->fee }}</td>
      </tr>
      <tr>
        <th>会場</th>
        <td>{{ $seminar->venue }}</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>{{ $seminar->address }}</td>
      </tr>
      <tr>
        <th>定員</th>
        <td>{{ $seminar->capacity }}</td>
      </tr>
      <tr>
        <th>対象</th>
        <td>{{ $seminar->subject }}</td>
      </tr>
      <tr>
        <th>付与</th>
        <td>{{ $seminar->qualification }}{{ $seminar->qualification_point }}</td>
      </tr>

    </table>
  </div>
</div>
@endsection