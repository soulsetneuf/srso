<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table="menus";
    protected $fillable=[
        "nombre",
        'precio_unitario',
        "descripcion",
        "id_servicio",
        "id_imagen",
    ];
    public function servicio()
    {
       return $this->hasOne("App\Servicio","id","id_servicio");
    }
    public function imagen()
    {
        return $this->hasOne("App\Imagen","id","id_imagen");
    }
}