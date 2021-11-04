<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // id以外の主キーを設定する
    protected $primarykey = 'room_id';
}
