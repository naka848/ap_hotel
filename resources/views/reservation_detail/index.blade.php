@extends('layouts.helloapp')

@section('title','Reservation_detail.index')

@section('menubar')
    @parent
    予約詳細一覧
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
            <li><a href="{{ url('reservation/list2') }}">予約／部屋一覧（多対多）</a></li>
            <li><a href="{{ url('room') }}">部屋一覧</a></li>
            <li><a href="{{ url('room_type') }}">部屋種別一覧</a></li>
            <li><a href="{{ url('room_type/list') }}">部屋種別／部屋一覧</a></li>
            <li><a href="{{ url('room/list') }}">部屋／部屋種別一覧</a></li>
        </ul>
    </nav>
    <br>

    <table>
        <tr>
            <th>予約詳細ID</th>
            <th>予約ID</th>
            <th>部屋ID</th>
            <th>宿泊日</th>
            <th>宿泊料</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->reservation_detail_id }}</td>
            <td>{{ $item->reservation_id }}</td>
            <td>{{ $item->room_id }}</td>
            <td>{{ $item->accommodation_date }}</td>
            <td>{{ $item->accommodation_fee }}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection