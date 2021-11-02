@extends('layouts.helloapp')

@section('title','User.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

{{-- @section('content')
    <table>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Tel</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->tel }}</td>
        </tr>
        @endforeach
    </table>
@endsection --}}

@section('content')
    <table>
        <tr>
            <th>User</th>
            <th>Reservation</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->getData() }}</td>
            <td>
                @if ($item->reservations != null)
                    <table width="100%">
                        @foreach ($item->reservations as $obj)
                            <tr><td>{{ $obj->getData() }}</td></tr>
                        @endforeach
                    </table>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2021 nakao.
@endsection