<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mskfo extends Model
{
    protected $table='mskfo';

    protected $fillable = [
        'tanggal', 
        'Jeniskabel',
        'jumlahkabel', 
        'panjangkabel', 
        'petugas', 
        'keterangan',
    ];

}
