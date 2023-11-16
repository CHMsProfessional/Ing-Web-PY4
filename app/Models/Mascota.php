<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = 'mascotas';
    protected $primaryKey = 'mascota_id';

    protected $fillable = [
        'tipo', 'nombre', 'raza', 'color', 'tamano', 'disponibilidad',
    ];

    // Relaciones
    public function adopciones()
    {
        return $this->hasMany('App\Adopcion', 'mascota_id');
    }
}
