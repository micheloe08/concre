<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{


	protected $table="clientes";
    protected $fillable = [

    'claveCliente','nombreCliente','rfc','estatusCliente',


    ];


public function Ventas(){

	return $this->hasMany('App\Ventas');



}




}
