<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Reservation_detail;
use Illuminate\Http\Request;

class Reservation_detailController extends Controller
{
    public function index(Request $request)
    {
        $items = Reservation_detail::all();
        return view('reservation_detail.index',['items' => $items]);
    }
}
