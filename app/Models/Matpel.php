<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matpel extends Model
{
    protected $table = 'matpel';
    
    protected $fillable = [
        'kode_matpel',
        'nama_matpel',
        'semester',
        'hari',
        'waktu',
        'level',
        'kode_pengajar',
        'nis',
        'kuota'
    ];

}
