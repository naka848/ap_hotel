<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_room', function (Blueprint $table) {

            // カラムを追加
            $table->increments('reservation_room_id');
            $table->integer('reservation_id');
            $table->integer('room_id');
            $table->date('accommodation_date');
            $table->integer('accommodation_fee');
            $table->timestamps();

            // 複合主キーを定義
            // …複数の項目をセットで判断する主キー

            // $table->primary(['reservation_id','room_id']);


            // 指定したカラムに外部キー制約を定義
            // foreignメソッド…外部キーを設定
            // referencesメソッド…従テーブル（reservation_room）の外部キー（reservation_id）と紐付いている主テーブルのid（reservation_id）を指定する。
            // onメソッド…主テーブル('reservations')を指定する。
            // onDeleteメソッド…reservationが削除・更新された場合の処理を記述する。今回、引数はcascade(このテーブルのデータも一緒に消えます)を指定する。
            
            // $table->foreign('reservation_id')->references('reservation_id')->on('reservations')->onDelete('cascade');
            // $table->foreign('room_id')->references('room_id')->on('rooms')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_room');
    }
}
