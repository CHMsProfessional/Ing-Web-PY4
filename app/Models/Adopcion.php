<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopcion extends Model
{
    use HasFactory;

    protected $table = 'adopciones';
    protected $primaryKey = 'adopcion_id';

    protected $fillable = [
        'cliente_id', 'mascota_id', 'fechaAdopcion',
    ];

    // Relaciones
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'cliente_id');
    }

    public function mascota()
    {
        return $this->belongsTo('App\Models\Mascota', 'mascota_id');
    }
}
