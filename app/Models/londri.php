<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class londri extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_form',
        'link'
    ];
}
