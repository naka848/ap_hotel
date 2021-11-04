<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
    public function rooms()
    {
        return $this->hasMany('App\Room','room_type_id','room_type_id');
    }
}
