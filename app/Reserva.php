<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table="reservas";
    protected $fillable=[
        "id_cliente",
        "fecha",
        "hora",
        "cantidad",
        "descripcion",
        "estado",
        "anticipo",
        "saldo",
        "total"
    ];
    public function cliente()
    {
        return $this->hasOne("App\Cliente","id","id_cliente");
    }
}