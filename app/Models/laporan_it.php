<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_it extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'tanggal',
        'unit',
        'jenis',
        'keluhan',
        'jam_laporan',
        'jam_selesai',
        'jenis_keluhan',
        'keterangan'
    ];
}
