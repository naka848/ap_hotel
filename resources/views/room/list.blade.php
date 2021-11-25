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
        <tr>
            <td>{{ $item->room_id }}</td>
            <td>{{ $item->room_number }}</td>
            <td>{{ $item->room_type_id }}</td>
            <td>{{ $item->room_type->room_type }}</td>
            <td>{{ $item->room_type->capacity }}</td>
        </tr>
        @endforeach
    </table>
    
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection