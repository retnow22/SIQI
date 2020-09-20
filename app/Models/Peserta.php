<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';
    
    protected $fillable = [
        'nis',
        'nama_peserta',
        'prodi',
        'fakultas',
        'instansi',
        'angkatan',
        'no_hp',
        'email',
        'jenis_kelamin',
        'level',
        'status_pembayaran',
        'semester_masuk'
    ];

}