<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAkomodasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('akomodasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_akomodasi');
            $table->string('longitude');
            $table->string('latitude');
            $table->unsignedBigInteger('cbt_id');
            $table->string('nama_akomodasi');
            $table->string('lokasi');
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
        Schema::dropIfExists('akomodasis');
    }
}
