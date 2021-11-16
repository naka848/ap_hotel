@extends('layouts.helloapp')

@section('title','Reservation.add')

@section('menubar')
    @parent
    予約ページ
@endsection

@section('content')
<nav>
    <ul>
        <li><a href="{{ url('user/add') }}">利用者登録</a></li>
        <li><a href="{{ url('reservation/add') }}">予約</a></li>
        <li><a href="{{ url('user') }}">利用者一覧</a></li>
        <li><a href="{{ url('reservation') }}">予約一覧</a></li>
        <li><a href="{{ url('reservation_detail') }}">予約詳細一覧</a></li>
        <li><a href="{{ url('user/list') }}">利用者／予約一覧</a></li>
        <li><a href="{{ url('reservation/list') }}">予約／利用者一覧</a></li>
        <li><a href="{{ url('reservation/list2') }}">予約／部屋一覧（多対多）</a></li>
        <li><a href="{{ url('room') }}">部屋一覧</a></li>
        <li><a href="{{ url('room_type') }}">部屋種別一覧</a></li>
        <li><a href="{{ url('room_type/list') }}">部屋／部屋種別一覧</a></li>
    </ul>
</nav>
<br>


{{-- エラー表示を出す --}}
@if (count($errors) > 0)
<div>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}
        @endforeach
    <ul>
<div>
@endif

    <form action="/reservation/add" method="post">
        <table>
        @csrf
        <tr>
            <th>利用者ID</th>
            <td><input type="text" name="user_id" value="{{old('user_id')}}"></td>
        </tr>
        <tr>
            <th>ご利用人数</th>
            <td><input type="text" name="number_of_people" value="{{old('number_of_people')}}"></td>
        </tr>
        <tr>
            <th>チェックイン</th>
            <td><input type="date" name="check_in_day" value="{{old('check_in_day')}}"></td>
        </tr>
        <tr>
            <th>チェックアウト</th>
            <td><input type="date" name="check_out_day" value="{{old('check_out_day')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="予約する"></td>
        </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection