<?php

namespace App\Models\Catalogo;

use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{    
	protected $table = 'catalogo_pais';
    protected $fillable = [
        'country_code',
        'country_name'
    ];

    public $timestamps = false;

    /**
    * Obtiene zonas horarias
    * un pais puede tener varias zonas horarias,
    */
    public function ZonaHoraria()
    {
        return $this->hasMany('App\Models\Catalogo\ZonaHoraria','id_pais','id');
    }

    /**
    * Obtiene monedas
    */
    public function Moneda()
    {
        return $this->hasOne('App\Models\Catalogo\Moneda');
    }
}
