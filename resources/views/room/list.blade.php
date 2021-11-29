@extends('layouts.helloapp')

@section('title','List.index')

@section('menubar')
    @parent
    空室一覧
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
        <tr>  
            {{-- 予約されたことのない部屋の検索 --}}
            @if(empty($item->reservations->first()->check_in_day) and $item->room_type->capacity <= 3 )
                <td>{{ $item->room_id }}</td>
                <td>{{ $item->room_number }}</td>
                <td>{{ $item->room_type_id }}</td>
                <td>{{ $item->room_type->room_type }}</td>
                <td>{{ $item->room_type->capacity }}</td>
                {{-- <td>{{ $item }}</td> --}}
            @endif

            {{-- 予約されているが、予約できる部屋の検索 --}}
            @foreach ($item->reservations as $reservation)
            <?php $searchCheckIn = strtotime('2021-11-01');
                    $checkIn = strtotime($reservation->check_in_day);
                    $searchCheckOut = strtotime('2021-11-02');
                    $checkOut = strtotime($reservation->check_out_day); ?>
                @if( ($checkOut <= $searchCheckIn or $searchCheckOut <= $checkIn) and $item->room_type->capacity <= 3 )
                    <td>{{ $item->room_id }}</td>
                    <td>{{ $item->room_number }}</td>
                    <td>{{ $item->room_type_id }}</td>
                    <td>{{ $item->room_type->room_type }}</td>
                    <td>{{ $item->room_type->capacity }}</td>
                    <td>{{ $checkIn }}</td>
                    <td>{{ $checkOut }}</td>
                @endif
            @endforeach
        </tr>
        @endforeach

    </table>
    
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection