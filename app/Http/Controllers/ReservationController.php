<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $items = Reservation::all();
        return view('reservation.index',['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('reservation.add');
    }

    public function create(Request $request)
    {
        $this->validate($request,Reservation::$rules);
        $reservation = new Reservation;
        $form = $request->all();
        unset($form['_token']);
        $reservation->fill($form)->save();
        return redirect('/reservation');
    }

    // public function delete(Request $request)
    // {
    //     $reservation = Reservation::find($request->id);
    //     return view('reservation.del',['form' => $reservation]);
    // }
    // public function remove(Request $request)
    // {
    //     Reservation::find($request->id)->delete();
    //     return redirect('/reservation');
    // }

    public function list(Request $request)
    {
        // DBアクセス回数多い
        // $items = Reservation::all();

        // Eagerローディング
        $items = Reservation::with('user')->get();
        return view('reservation.list',['items' => $items]);
    }

    public function list2(Request $request)
    {
        $items = Reservation::all();
        // $items = Reservation::with('room')->get();
        
        // $変数 = モデルクラス::find(整数);
        // IDによるレコード検索。主キーが「id」以外だとうまく動かない
        // $items = Reservation::find(1);
  
        return view('reservation.list2',['items' => $items]);
    }
}
