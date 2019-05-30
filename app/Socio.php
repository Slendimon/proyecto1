<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $fillable = [
        'apellido_p',
        'apellido_m',
        'nombre',
        'cargo',
        'habilitado',
        'descripcion'
    ];
    public function stands (){
        return $this->belongsToMany(Stand::class);
    }
}
