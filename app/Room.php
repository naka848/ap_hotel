<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // id以外の主キーを設定する
    protected $primaryKey = 'room_id';

    // 従テーブルroomから、主テーブルroom_typeのレコードを取り出す
    public function room_type(){
        return $this->belongsTo('App\Room_type', 'room_type_id', 'room_type_id');
    }

    public function reservations(){
        return $this->belongsToMany('App\Reservation','reservation_room','room_id','reservation_id');
    }
}
