<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatMakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_makan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat');
            $table->string('no_telp');
            $table->string('waktu_operasional');
            $table->unsignedBigInteger('id_lokasi');
            $table->foreign('id_lokasi')->references('id')->on('lokasi')->onDelete('cascade');
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
        Schema::dropIfExists('tempat_makan');
    }
}
