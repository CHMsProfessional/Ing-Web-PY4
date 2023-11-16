<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'cliente_id';

    protected $fillable = [
        'nombres', 'apellidos', 'telefono', 'email',
    ];

    public function referencias()
    {
        return $this->hasMany('App\Referencia', 'cliente_id');
    }

    public function adopciones()
    {
        return $this->hasMany('App\Adopcion', 'cliente_id');
    }
}
