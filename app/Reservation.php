<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    // id以外の主キーを設定する
    protected $primaryKey = 'reservation_id';

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
    
    // 従テーブルReservationから、主テーブルUserのレコードを取り出す
    public function user(){
        // return $this->belongsTo('App\User','id','user_id');
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    // belongsToMany
    // 第1引数…最終的な接続先モデル名
    // 第2引数…中間テーブル名
    // 第3引数…接続元モデル ID を示す中間テーブル内のカラム名
    // 第4引数…最終的な接続先モデル ID を示す中間テーブル内のカラム名
    // 第5引数…接続元モデル ID のカラム名
    // 第6引数…最終的な接続先モデル ID のカラム名
    public function rooms(){
        return $this->belongsToMany('App\Room','reservation_room','reservation_id','room_id');
    }
}
