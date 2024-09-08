<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $fillable = ['trabajador_id', 'num_practicas', 'lavados_fuera_horario', 'gestion_examenes', 'uso_movil', 'fecha'];

    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class);
    }

    public function getTotalExtrasAttribute()
    {
        return ($this->num_practicas * config('extras.practica')) +
            ($this->lavados_fuera_horario * config('extras.lavado_fuera_horario')) +
            ($this->gestion_examenes * config('extras.gestion_examen')) +
            ($this->uso_movil * config('extras.uso_movil'));
    }
}

