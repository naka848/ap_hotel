@extends('layouts.helloapp')

@section('title','Test.index')

@section('menubar')
    @parent
    多対多
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

    <table>
        <tr>
            <th>予約ID</th>
            <th>利用者ID</th>
            <th>宿泊人数</th>
            <th>チェックイン</th>
            <th>チェックアウト</th>
            <th>部屋ID</th>
            <th>部屋種別ID</th>
            <th>部屋番号</th>
        </tr>

        {{-- $itemsのなかみ…ReservationDBからもってきたモデルがいっぱい入った配列 --}}
        {{-- $itemのなかみ…Reservationのモデルが１個はいったもの --}}
        @foreach($items as $item)
        <tr>
            <td>{{ $item->reservation_id }}</td>
            <td>{{ $item->user_id }}</td>
            <td>{{ $item->number_of_people }}</td>
            <td>{{ $item->check_in_day }}</td>
            <td>{{ $item->check_out_day }}</td>
            {{-- $item…モデル --}}
            {{-- rooms…モデルのメソッド（Reservationモデルにて定義） --}}
            @foreach ($item->rooms as $room )
            <td>{{ $room->pivot->room_id }}</td>
            <td>{{ $room->room_type_id }}</td>
            <td>{{ $room->room_number }}</td>
            @endforeach
            {{-- これでもかける  ※空のデータを含まなければ --}}
            {{-- <td>{{ $item->rooms->first()->room_id }}</td> --}}
        </tr>
        @endforeach
    </table>
    
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection