@extends('layout')
@section('title','セミナテストー一覧')
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
                <th>セミナー名</th>
                <th>開催地</th>
                <th>投稿日時</th>
            </tr>
            @foreach($seminartests as $seminartest)
            <tr>
                <td>{{$seminartest->name }}</td>
                <td>{{$seminartest->mst_prefectures_code_id }}</td>{{--mst_prefectures_codesのIDと紐付けをしたい--}}
                <td>{{$seminartest->updated_at }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection