@extends('layouts.helloapp')

@section('title','List.index')

@section('menubar')
    @parent
    部屋種別／部屋一覧
@endsection

@section('content')

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
            <td>{{ $item->rooms->first()->room_type_id }}</td>
            <td>{{ $item->rooms->first()->room_number }}</td>
        </tr>
        @endforeach
    </table>
    
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection