@extends('layouts.helloapp')

@section('title','Room.index')

@section('menubar')
    @parent
    客室一覧
@endsection

@section('content')
    <nav>
        <ul>
            <li><a href="{{ url('user/add') }}">利用者登録</a></li>
            <li><a href="{{ url('reservation/add') }}">予約</a></li>
            <li><a href="{{ url('user') }}">利用者一覧</a></li>
            <li><a href="{{ url('reservation') }}">予約一覧</a></li>
            <li><a href="{{ url('user/list') }}">利用者／予約一覧</a></li>
        </ul>
    </nav>
    <br>

    <table>
        <tr>
            <th>客室ID</th>
            <th>客室タイプID</th>
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