@extends('layouts.helloapp')

@section('title','User.add')

@section('menubar')
    @parent
    利用者登録フォーム
@endsection

@section('content')

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