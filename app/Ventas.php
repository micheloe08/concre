<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table="ventas";

    protected $fillable= [

    	'claveCliente','nombreCliente','total',

    ]; 



}
