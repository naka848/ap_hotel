<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
    public function rooms()
    {
        // hasMany('従テーブルのモデル','従テーブルの外部キー','主テーブルの主キー');
        return $this->hasMany('App\Room','room_type_id','room_type_id');
    }
}
