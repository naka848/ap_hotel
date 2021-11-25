@extends('layouts.helloapp')

@section('title','User.index')

@section('menubar')
    @parent
    利用者一覧
@endsection

@section('content')

    <table>
        <tr>
            <th>利用者ID</th>
            <th>名前</th>
            <th>住所</th>
            <th>電話番号</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->tel }}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection