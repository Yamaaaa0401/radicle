@extends('layout')
@section('title','セミナー一覧')
@section('content')
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
        <th>主催</th>
        <th>開催地</th>
        <th>講座紹介</th>
        <th>開催形式</th>
      </tr>
      @foreach($seminars as $seminar)
      <tr>
        <td>{{$seminar->online_conference }}</td>
        <td>{{$seminar->seminar_date }}</td>
        <td><a href="/seminar/{{ $seminar->id }}">{{$seminar->eventologist }}</a></td>
        <td>{{$seminar->mst_prefectures_code->name}}</td>
        <td>{{$seminar->lead }}</td>
        <td>{{$seminar->mst_format_id->name}}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection