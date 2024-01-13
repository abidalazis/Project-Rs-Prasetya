<?php

namespace App\Models;

use App\Models\merk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ruangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_ruangan',
        'keterangan'
    ];

    public function merk()
    {
        return $this->hasMany(merk::class);
    }

    protected $table = 'ruangans';
}
