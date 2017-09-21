<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table="productos";

    protected $fillable= ['claveProducto','descripcion','precio','stock',


    ];


    public function ventas(){

    	return $this->hasManyTo('App\Ventas');
    }


    public function scopeSearch($query,$descripcion){


    	return $query->where('descripcion','LIKE','%$descripcion%');
    }
}
