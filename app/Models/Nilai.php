<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    
    protected $fillable = [
        'nis',
        'kode_matpel',
        'nilai_lisan',
        'nilai_teori',
        'nilai_akhir',
        'kkm',
        'keterangan',
        'penguji'
    ];

}
