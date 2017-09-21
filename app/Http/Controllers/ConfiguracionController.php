<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Configuracion;
class ConfiguracionController extends Controller
{
    public function index()
    {
    	$configuracion= Configuracion::orderBy('id','desc')->paginate(5);
    	return view('admin.configuracion.index')->with('configuracion',$configuraciones);

}

public function edit($id)
    {
    	$configuracion = Configuracion::find($id);
    	return view('admin.configuracion.edit')->with('configuracion',$configuraciones);

    }

    public function update(Request $request, $id)
    {
    		$configuracion= Configuracion::find($id);
    		$configuracion->tasa = $request->descripcion;
    		$configuracion->porcentaje = $request->precio;
    		$configuracion->plazo = $request->stock;
    		$productos->save();

    		Flash::success("Actualizado con exito La configuracion");
    		return redirect()->route('admin.configuracion.index');
    }





}
