@extends('layouts.helloapp')

@section('title','List.index')

@section('menubar')
    @parent
    部屋／部屋種別一覧
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
            <th>部屋種別ID</th>
            <th>名称</th>
            <th>宿泊可能人数</th>
            <th>部屋ID</th>
            <th>部屋番号</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->room_type_id }}</td>
            <td>{{ $item->room_type }}</td>
            <td>{{ $item->capacity }}</td>
            <td>{{ $item->rooms}}</td>
        </tr>
        @endforeach
    </table>
    
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection