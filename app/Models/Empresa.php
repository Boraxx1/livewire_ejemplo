<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'sitio_web', 'ubicacion'];

    public function users()
    {
        return $this->hasMany(User::class, 'empresa_id');
    }

    public function empleos()
    {
        return $this->hasMany(Empleo::class, 'empresa_id');
    }
}