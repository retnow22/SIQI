<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    protected $table = 'pengajar';
    
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
    ];
}
