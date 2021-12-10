<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTempatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_tempat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kota');
            $table->foreign('id_kota')->references('id')->on('lokasi')->onDelete('cascade');
            $table->unsignedBigInteger('id_tempat');
            $table->foreign('id_tempat')->references('id')->on('tempat_makan')->onDelete('cascade');
            $table->string('no_telp');
            $table->string('waktu_operasional');
            $table->string('alamat')->nullable();
            $table->string('link_maps')->nullable();
            $table->string('menu')->nullable();
            $table->string('review')->nullable();
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
        Schema::dropIfExists('detail_tempat');
    }
}
