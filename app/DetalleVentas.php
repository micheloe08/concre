<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVentas extends Model
{
   protected $table="detalleventas";

   protected $fillable=['ventas_id','productos_id','clientes_id','cantidad','plazo','abono','total',];

 
}
