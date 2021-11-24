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
}
