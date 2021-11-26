@extends('layouts.helloapp')

@section('title','List.index')

@section('menubar')
    @parent
    部屋／部屋種別一覧
@endsection

@section('content')

    <table>
        <tr>
            <th>部屋ID</th>
            <th>部屋番号</th>
            <th>部屋種別ID</th>
            <th>部屋種別</th>
            <th>宿泊可能人数</th>
        </tr>

        @foreach($items as $item)   
            @if(empty($item->reservations->first()->check_in_day))
                <tr>
                    <td>{{ $item->room_id }}</td>
                    <td>{{ $item->room_number }}</td>
                    <td>{{ $item->room_type_id }}</td>
                    <td>{{ $item->room_type->room_type }}</td>
                    <td>{{ $item->room_type->capacity }}</td>
                    <td>{{ $item }}</td>
                </tr>
            @endif
        @endforeach

    </table>

                {{-- 予約日の指定（メモ） --}}
                {{-- @foreach ($item->reservations as $reservation)
            <td>{{ $reservation->check_in_day }}</td>
            <td>{{ $reservation->check_out_day }}</td>
            @endforeach --}}

                        {{-- これだと空のデータを含むので表示できなさそう
            <td>{{ $item->reservations->first()->check_in_day }}</td> --}}
    
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection