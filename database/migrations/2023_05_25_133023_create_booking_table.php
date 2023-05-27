<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kamar')->unsigned();
            $table->integer('id_customer')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('bukti');
            $table->timestamps();

            $table->foreign('id_kamar')->on('kamar')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_customer')->on('customer')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
