<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjekWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objek_wisatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_objek_wisata');
            $table->string('lokasi');
            $table->string('foto');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('kategori');
            $table->string('deskripsi');
            $table->unsignedBigInteger('cbt_id');
            $table->timestamps();


            $table->foreign('cbt_id')->references('id')->on('cbts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objek_wisatas');
    }
}
