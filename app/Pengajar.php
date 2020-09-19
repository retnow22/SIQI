<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    protected $fillable = [
        'nip',
        'nama_pengajar',
        'prodi',
        'fakultas',
        'instansi',
        'no_hp',
        'email',
        'jenis_kelamin',
        'level',
        'kode_pengajar'
    ]
}
