<?php

namespace App\Http\Controllers;

use App\Room_type;
use Illuminate\Http\Request;

class Room_typeController extends Controller
{
    public function index(Request $request)
    {
        $items = Room_type::all();
        return view('room_type.index',['items' => $items]);
    }

    public function list(Request $request)
    {
        $items = Room_type::all();
        return view('room_type.list',['items' => $items]);
    }
}
