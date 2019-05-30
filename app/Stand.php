<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Socio;
class Stand extends Model
{
    protected $fillable = [
        'letra',
        'numero',
        'padron'
    ];
    public function stands(){
        return $this->belongsToMany(Socio::class)->withPivot('fecha_inscripcion','observacion');
    }
}
