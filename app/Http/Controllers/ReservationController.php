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

    public function list(Request $request)
    {
        $items = Reservation::all();
        return view('reservation.list',['items' => $items]);
    }
}
