@extends('layouts.helloapp')

@section('title','Reservation.index')

@section('menubar')
    @parent
    予約一覧
@endsection

@section('content')

    <table>
        <tr>
            <th>予約ID</th>
            <th>利用者ID</th>
            <th>宿泊人数</th>
            <th>チェックイン</th>
            <th>チェックアウト</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->reservation_id }}</td>
            <td>{{ $item->user_id }}</td>
            <td>{{ $item->number_of_people }}</td>
            <td>{{ $item->check_in_day }}</td>
            <td>{{ $item->check_out_day }}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection