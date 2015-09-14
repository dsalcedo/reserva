<?php

namespace App\Models\Catalogo;

use Illuminate\Database\Eloquent\Model;

class ZonaHoraria extends Model
{
	protected $table = 'catalogo_zona_horaria';
    protected $fillable = [
        'id_pais',
        'zona_horaria',
        'zona_vanidad'
    ];

    public $timestamps = false;
}
