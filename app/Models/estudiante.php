<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'carrera_id');
    }
    
}

