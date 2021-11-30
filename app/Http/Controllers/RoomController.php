<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    // -------------------viewsで検索してる方のリスト-------------------
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

    }





    // -------------------controllerで検索してる方のリスト-------------------
    public function find2(Request $request)
    {
        return view('room.find2',['input' => '']);
    }


    // $itemsの中身を先に絞ってみる
    // →ROOMテーブルにはnumber_of_peopleの項目がないので検索できなかった…このやり方はできないものなのか？
    public function search2(Request $request)
    {
        // // 送信フォームの値を保管
        // $param = [
        //     'number_of_people' => $request->number_of_people,
        //     'check_in_day' => $request->check_in_day,
        //     'check_out_day' => $request->check_out_day,
        // ];
        $items = DB::select('select * from rooms left outer join reservations');
        // $items = DB::select('select * from rooms where number_of_people < :number_of_people',$param);
        return view('room.list2',['items' => $items]);
    }


}
