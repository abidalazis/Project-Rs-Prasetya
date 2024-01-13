<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_ruangan',
        'id_merk',
        'tanggal',
        'status',
        'keterangan'
    ];

    public function ruangan()
    {
        return $this->belongsTo(ruangan::class,'id_ruangan', 'id');
    }
    public function merk()
    {
        return $this->belongsTo(merk::class,'id_merk', 'id');
    }

    protected $table = 'services';
}
