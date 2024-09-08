<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    protected $fillable = ['dni', 'nombre', 'apellidos', 'centro_id'];

    public function centro()
    {
        return $this->belongsTo(Centro::class);
    }

    public function extras()
    {
        return $this->hasMany(Extra::class);
    }
}

