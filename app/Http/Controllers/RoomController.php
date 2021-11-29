<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $items = Room::all();
        return view('room.index',['items' => $items]);
    }

    public function list(Request $request)
    {
        $items = Room::all();
        return view('room.list',['items' => $items]);
    }

    public function find(Request $request)
    {
        return view('room.find',['input' => '']);
    }

    // 入力内容をLISTに渡したい
    // キー＝＞バリュー
    public function search(Request $request)
    {
        $items = Room::all();
        // 送信フォームの値を保管
        $param = [
            'number_of_people' => $request->number_of_people,
            'check_in_day' => $request->check_in_day,
            'check_out_day' => $request->check_out_day,
            'items' => $items,
        ];
        return view('room.list',$param);

        // 引数が増えているがこの書き方でいいのか？？なんか通ってはいるかも？
        // return view('room.list',$param,['items' => $items]);

        // うまくいかん。「Undefined variable」変数に値がないですよというエラーがでる
        // return view('room.list',compact($param,['items' => $items]));

    }
}
