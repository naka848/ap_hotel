@extends('layouts.helloapp')

@section('title','Reservation.Delete')

@section('menubar')
    @parent
    予約取り消し
@endsection

@section('content')
<nav>
    <ul>
        <li><a href="{{ url('user/add') }}">利用者登録</a></li>
        <li><a href="{{ url('reservation/add') }}">予約</a></li>
        <li><a href="{{ url('user') }}">利用者一覧</a></li>
        <li><a href="{{ url('reservation') }}">予約一覧</a></li>
        <li><a href="{{ url('reservation_detail') }}">予約詳細一覧</a></li>
        <li><a href="{{ url('user/list') }}">利用者／予約一覧</a></li>
        <li><a href="{{ url('reservation/list') }}">予約／利用者一覧</a></li>
        <li><a href="{{ url('room') }}">部屋一覧</a></li>
        <li><a href="{{ url('room_type') }}">部屋種別一覧</a></li>
        <li><a href="{{ url('room_type/list') }}">部屋／部屋種別一覧</a></li>
    </ul>
</nav>
<br>

    <form action="/person/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{ $form->id }}">
        <tr>
            <th>予約ID</th>
            <td>{{ $form->reservation_id }}</td>
        </tr>
        <tr>
            <th>利用者ID</th>
            <td>{{ $form->user_id }}</td>
        </tr>
        <tr>
            <th>宿泊人数</th>
            <td>{{ $form->number_of_people }}</td>
        </tr>
        <tr>
            <th>チェックイン</th>
            <td>{{ $form->check_in_day }}</td>
        </tr>
        <tr>
            <th>チェックアウト</th>
            <td>{{ $form->check_out_day }}</td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
    </form>
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection