<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clave extends Model
{
    use HasFactory;

    protected $fillable = [
        'clave',
        // 'status',
    ];

    
    protected $hidden = [
        'id',
    ];
}
