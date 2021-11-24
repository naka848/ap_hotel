<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
    // id以外の主キーを設定する
    protected $primaryKey = 'room_type_id';

    public function rooms()
    {
        // hasMany('従テーブルのモデル','従テーブルの外部キー','主テーブルの主キー');
        return $this->hasMany('App\Room','room_type_id','room_type_id');
    }
}
