<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatpelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matpel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_matpel');
            $table->string('semester');
            $table->string('hari');
            $table->string('waktu');
            $table->string('level');
            $table->string('kode_pengajar')->nullable();
            $table->string('nis')->nullable();
            $table->integer('kuota');
            $table->integer('pengajar_id')->nullable();
            $table->integer('peserta_id')->nullable();
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
        Schema::dropIfExists('matpel');
    }
}
