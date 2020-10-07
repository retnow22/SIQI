<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->nullable();
            $table->string('nama_peserta');
            $table->string('prodi');
            $table->string('fakultas');
            $table->string('instansi');
            $table->string('angkatan');
            $table->string('no_hp');
            $table->string('email');
            $table->string('jenis_kelamin');
            $table->string('level');
            $table->string('semester_masuk')->nullable();
            $table->string('userid')->nullable();
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
        Schema::dropIfExists('peserta');
    }
}
