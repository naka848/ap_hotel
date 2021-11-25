@extends('layouts.helloapp')

@section('title','Room.index')

@section('menubar')
    @parent
    部屋一覧
@endsection

@section('content')

    <table>
        <tr>
            <th>部屋ID</th>
            <th>部屋種別ID</th>
            <th>部屋番号</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->room_id }}</td>
            <td>{{ $item->room_type_id }}</td>
            <td>{{ $item->room_number }}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection