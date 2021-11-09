<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    // $guarded…入力しなくていい、フォームから値をもらわなくていいよ
    protected $guarded = array('id');

    // こっちは入力必須項目
    public static $rules = array(
        'name' => 'required',
        'address' => 'email',
        'tel' => 'integer|min:0|max:150'
    );

    // Reservationテーブルのレコードを取り出せるようにする
    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
