<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $table = 'postulaciones';

    protected $fillable = [
        'empleo_id',
        'user_id',
        'carta_presentacion',
        'estado',
        'fecha_postulacion',
    ];

    public function empleo()
    {
        return $this->belongsTo(Empleo::class, 'empleo_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}