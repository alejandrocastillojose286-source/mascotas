<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_dueno',
        'telefono',
        'nombre_mascota',
        'servicio_id',
        'fecha',
        'hora',
        'notas',
        'estado',
    ];

    // Relación: Una cita pertenece a un servicio
    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }
}