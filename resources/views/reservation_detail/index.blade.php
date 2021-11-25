@extends('layouts.helloapp')

@section('title','Reservation_detail.index')

@section('menubar')
    @parent
    予約詳細一覧
@endsection

@section('content')

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