<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table="imagenes";
    protected $fillable=[
        "nombre",
        'ruta',
        'tipo',
        "tamaño"
    ];
    public function getRutaCompletaAttribute(){
        return $this->nombre.".".$this->tipo;
    }
}
