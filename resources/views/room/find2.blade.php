@extends('layouts.helloapp')

@section('title','Room.find2')

@section('menubar')
    @parent
    空室検索
@endsection

@section('content')

    <form action="/room/find2" method="post">
        <table>
        @csrf
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
            <td><input type="submit" value="空室を検索する"></td>
        </tr>
        </table>
    </form>
    {{-- @if (isset($item)))
        <p>ここに空室だす</p>
    @endif --}}
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection