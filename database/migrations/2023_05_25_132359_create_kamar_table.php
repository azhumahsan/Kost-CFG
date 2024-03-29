<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('gedung',['A', 'B']);
            $table->integer('lantai');
            $table->string('nomor_kamar')->unique();
            $table->string('foto');
            $table->enum('kondisi',['kosong', 'penuh', 'rusak']);
            $table->string('harga');
            $table->text('spesifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamar');
    }
}
