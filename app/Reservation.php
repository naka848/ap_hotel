<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    // id以外の主キーを設定する
    protected $primarykey = 'reservation_id';

    // creteの際に、「id」、「reservation_id」以外の要素をcreateから渡す
    // protected $guarded = array('id','reservation_id');
    protected $guarded = array('reservation_id');

    // こっちは入力必須項目
    public static $rules = array(
            'user_id' => 'required',
            'number_of_people' => 'required',
            'check_in_day' => 'required',
            'check_out_day' => 'required'
        );
    
    // いらなくなった（後で消す）
    // public function getData()
    // {
    //     return $this->reservation_id . ': ' . $this->number_of_people;
    // }
}
