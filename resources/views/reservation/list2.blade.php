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
            <th>テスト</th>
            <th>テスト2
            </th>
        </tr>

        {{-- $itemsのなかみ…ReservationDBからもってきたモデルがいっぱい入った配列 --}}
        {{-- $itemのなかみ…Reservationのモデルが１個はいったもの --}}
        @foreach($items as $item)
        <tr>
            {{-- $item…モデル --}}
            {{-- rooms…モデルのメソッド（Reservationモデルにて定義） --}}
            <td>{{ $item->rooms }}</td>
            {{-- <td>{{ $item->rooms->pivot }}</td> --}}
        </tr>
        @endforeach
    </table>
    
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection