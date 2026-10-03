<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleo extends Model
{
    protected $fillable = [
        'empresa_id',
        'titulo',
        'descripcion',
        'ubicacion',
        'modalidad',
        'tipo_contrato',
        'salario',
        'estado',
        'fecha_publicacion',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function postulaciones()
    {
        return $this->hasMany(Postulacion::class, 'empleo_id');
    }
}