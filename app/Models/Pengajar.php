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
        'angkatan',
        'no_hp',
        'email',
        'jenis_kelamin',
        'level',
        'kode_pengajar',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function matpel()
    {
        return $this->hasMany('App\Models\Matpel');
    }
}
