<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajar', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama_pengajar');
            $table->string('prodi');
            $table->string('fakultas');
            $table->string('instansi');
            $table->string('no_hp');
            $table->string('email');
            $table->string('jenis_kelamin');
            $table->string('level');
            $table->string('kode_pengajar');
            $table->string('userid');
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
        Schema::dropIfExists('pengajar');
    }
}
