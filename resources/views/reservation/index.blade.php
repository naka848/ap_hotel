@extends('layouts.helloapp')

@section('title','Reservation.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>User id</th>
            <th>Number of people</th>
            <th>Check in day</th>
            <th>Check out day</th>
        </tr>
        @foreach($items as $item)
        <tr>
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