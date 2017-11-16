<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table="clientes";
    protected $fillable=[
        "nombres",
        "apellido_paterno",
        "apellido_materno",
        "telefono",
        "email",
        "pais"
    ];
    public function getNombreCompletoAttribute(){
        return $this->nombres." ".$this->apellido_paterno." ".$this->apellido_materno;
    }
}
