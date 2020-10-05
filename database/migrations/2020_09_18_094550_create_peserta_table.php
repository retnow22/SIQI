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
            $table->string('prodi')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('instansi')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email');
            $table->string('jenis_kelamin')->nullable();
            $table->string('level');
            $table->boolean('status_pembayaran')->nullable();
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
