@extends('layouts.helloapp')

@section('title','User.add')

@section('menubar')
    @parent
    利用者登録フォーム
@endsection

@section('content')
<nav>
    <ul>
        <li><a href="{{ url('user/add') }}">利用者登録</a></li>
        <li><a href="{{ url('reservation/add') }}">予約</a></li>
        <li><a href="{{ url('user') }}">利用者一覧</a></li>
        <li><a href="{{ url('reservation') }}">予約一覧</a></li>
        <li><a href="{{ url('user/list') }}">利用者／予約一覧</a></li>
</nav>
<br>

    @if (count($errors)>0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/user/add" method="post">
        <table>
        @csrf
        <tr>
            <th>お名前</th>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
        <tr>
            <th>ご住所</th>
            <td><input type="text" name="address" value="{{old('address')}}"></td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td><input type="text" name="tel" value="{{old('tel')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection