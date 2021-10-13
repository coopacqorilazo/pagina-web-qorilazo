<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Normativa extends Model
{
    protected $fillable = [
        'numero','version','descripcion', 'tipo', 'estado','proceso',
        'fechapublicacion', 'fechaemision', 'urldocumento'
    ];
}
