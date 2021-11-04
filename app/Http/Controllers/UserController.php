<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $items = User::all();
        return view('user.index',['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('user.add');
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'address' => $request->address,
            'tel' => $request->tel,
        ];
        DB::table('users')->insert($param);
        return redirect('/user');
    }

    public function list(Request $request)
    {
        $items = User::all();
        return view('user.list',['items' => $items]);
    }
}
