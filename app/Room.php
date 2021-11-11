<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // id以外の主キーを設定する
    protected $primaryKey = 'room_id';

    public function reservations(){
        return $this->belongsToMany('App\Reservation','reservation_room','room_id','reservation_id');
    }
}
