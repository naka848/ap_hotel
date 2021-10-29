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
}
