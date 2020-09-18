<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanKbmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_kbm', function (Blueprint $table) {
            $table->id();
            $table->string('kode_matpel');            
            $table->string('kode_pengajar');
            $table->date('tanggal');
            $table->string('materi');
            $table->string('nis');
            $table->boolean('presensi');
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
        Schema::dropIfExists('laporan_kbm');
    }
}
