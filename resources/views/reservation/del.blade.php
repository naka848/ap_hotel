@extends('layouts.helloapp')

@section('title','Reservation.Delete')

@section('menubar')
    @parent
    予約取り消し
@endsection

@section('content')

    <form action="/person/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{ $form->id }}">
        <tr>
            <th>予約ID</th>
            <td>{{ $form->reservation_id }}</td>
        </tr>
        <tr>
            <th>利用者ID</th>
            <td>{{ $form->user_id }}</td>
        </tr>
        <tr>
            <th>宿泊人数</th>
            <td>{{ $form->number_of_people }}</td>
        </tr>
        <tr>
            <th>チェックイン</th>
            <td>{{ $form->check_in_day }}</td>
        </tr>
        <tr>
            <th>チェックアウト</th>
            <td>{{ $form->check_out_day }}</td>
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