@extends('layouts.helloapp')

@section('title','List.index')

@section('menubar')
    @parent
    利用者／予約一覧
@endsection

@section('content')

    <table>
        <tr>
            <th>利用者ID</th>
            <th>名前</th>
            <th>住所</th>
            <th>電話番号</th>
            <th>予約ID</th>
            <th>宿泊人数</th>
            <th>チェックイン</th>
            <th>チェックアウト</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->tel }}</td>
            <td>
                @foreach ($item->reservations as $obj)
                    {{ $obj->reservation_id }}
                @endforeach
            </td>
            <td>
                @foreach ($item->reservations as $obj)
                    {{ $obj->number_of_people }}
                @endforeach
            </td>
            <td>
                @foreach ($item->reservations as $obj)
                    {{ $obj->check_in_day }}
                @endforeach
            </td>
            <td>
                @foreach ($item->reservations as $obj)
                    {{ $obj->check_out_day }}
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection