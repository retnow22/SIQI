<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kafalah extends Model
{
    protected $table = 'kafalah';
    
    protected $fillable = [
        'semester',
        'nip',
        'jumlah_mengajar',
        'nominal',
        'total_pembayaran'
    ];
}
