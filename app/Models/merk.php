<?php

namespace App\Models;

use App\Models\ruangan;
use App\Models\services;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class merk extends Model
{
    use HasFactory;
    protected $guard = ['id'];
    protected $fillable = [
        'id_ruangan',
        'nama_merk',
        'jenis',
        'keterangan'];

    public function ruangan()
    {
        return $this->belongsTo(ruangan::class,'id_ruangan', 'id');
    }

    public function service()
    {
        return $this->hasMany(services::class);
    }


    protected $table = 'merks';
}
