@extends('layouts.helloapp')

@section('title','Room_type.index')

@section('menubar')
    @parent
    部屋種別一覧
@endsection

@section('content')

    <table>
        <tr>
            <th>部屋種別タイプID</th>
            <th>名称</th>
            <th>宿泊可能人数</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->room_type_id }}</td>
            <td>{{ $item->room_type }}</td>
            <td>{{ $item->capacity }}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection