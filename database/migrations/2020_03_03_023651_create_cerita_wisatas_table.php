<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCeritaWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cerita_wisatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('tgl_postingan');
            $table->string('foto');
            $table->string('deskripsi');
            $table->unsignedBigInteger('wisatawan_id');
            $table->timestamps();

            $table->foreign('wisatawan_id')->references('id')->on('wisatawans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cerita_wisatas');
    }
}
