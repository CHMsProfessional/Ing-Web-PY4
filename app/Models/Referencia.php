<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    use HasFactory;

    protected $table = 'referencias';
    protected $primaryKey = 'referencias_id';

    protected $fillable = [
        'nombreReferencia', 'telefono', 'parentesco', 'cliente_id',
    ];

    // Relaciones

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'cliente_id');
    }
}
