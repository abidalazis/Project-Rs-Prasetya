<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surveilansok extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_form',
        'link'
    ];
    protected $table = 'surveilans-oks';
}
