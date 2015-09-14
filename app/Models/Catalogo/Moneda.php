<?php

namespace App\Models\Catalogo;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $table = 'catalogo_moneda';
    protected $fillable = [
        'moneda'
    ];

    public $timestamps = false;
}
