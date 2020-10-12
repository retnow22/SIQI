<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matpel extends Model
{
    protected $table = 'matpel';
    
    protected $fillable = [
        'nama_matpel',
        'semester',
        'hari',
        'waktu',
        'level',
        'kode_pengajar',
        'nis',
        'kuota',
        'pengajar_id',
        'peserta_id'
    ];

    public function pengajar()
    {
        return $this->belongsTo('App\Models\Pengajar');
    }

}
