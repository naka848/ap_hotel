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
    // public function find(Request $request)
    // {
    //     return view('reservation.index',['input' => '']);
    // }
    // public function search(Request $request)
    // {
    //     $item = Reservation::find($request->input);
    //     $param = ['input' => $request->input, 'item' => $item];
    //     return view('reservation.find',$param);
    // }
}
