<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_event');
            $table->string('tgl_awal');
            $table->string('tgl_akhir');
            $table->string('lokasi');
            $table->unsignedBigInteger('cbt_id');
            $table->string('deskripsi');
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
        Schema::dropIfExists('events');
    }
}
