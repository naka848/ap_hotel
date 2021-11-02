@extends('layouts.helloapp')

@section('title','Reservation.add')

@section('menubar')
    @parent
    予約ページ
@endsection

@section('content')

{{-- エラー表示だすやつ --}}
{{-- @foreach ($errors as $error)
    <p>{{$error}}</p>    
@endforeach --}}

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