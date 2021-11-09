<?php

namespace App\Http\Controllers;

use App\Reservation_room;
use Illuminate\Http\Request;

class Reservation_roomController extends Controller
{
    public function index(Request $request)
    {
        $items = Reservation_detail::all();
        return view('reservation_detail.index',['items' => $items]);
    }
}
