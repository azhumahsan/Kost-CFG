<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhotoLinksToKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kamar', function (Blueprint $table) {
            $table->string('photo_link1')->nullable();
            $table->string('photo_link2')->nullable();
            $table->string('photo_link3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kamar', function (Blueprint $table) {
            $table->dropColumn(['foto', 'photo_link1', 'photo_link2', 'photo_link3']);
        });
    }
}
