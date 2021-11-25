@extends('layouts.helloapp')

@section('title','Test.index')

@section('menubar')
    @parent
    部屋の空き状況確認
@endsection

@section('content')

    <table>
        <tr>
            <th>宿泊可能人数</th>
            <th>部屋ID</th>
            <th>部屋種別ID</th>
            <th>部屋番号</th>
        </tr>

        {{-- $itemsのなかみ…ReservationDBからもってきたモデルがいっぱい入った配列 --}}
        {{-- $itemのなかみ…Reservationのモデルが１個はいったもの --}}
        @foreach($items as $item)
        <tr>
            <td>{{ $item->number_of_people }}</td>
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