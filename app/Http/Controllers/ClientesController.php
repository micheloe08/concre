<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class ClientesController extends Controller
{
   public function index()
    {
    	$clientes= Clientes::orderBy('id','desc')->paginate(5);
    	return view('admin.clientes.index')->with('clientes',$clientes);
    }

    public function create()
    {
    	return view('admin.clientes.create');
    }

    public function store(Request $request)
    {
    		$clientes = new Clientes($request->all());
    		$clientes->save();

    		Flash::success("Bien Hecho. El cliente ha sido registrado correctamente");
    		return redirect()->route('admin.clientes.index');
    }

    public function show($id)
    {


    }

    public function edit($id)
    {
    	$clientes = Clientes::find($id);
    	return view('admin.clientes.edit')->with('clientes',$clientes);

    }

    public function update(Request $request, $id)
    {
    		$clientes= Clientes::find($id);
    		$clientes->nombreCliente = $request->nombreCliente;
    		$clientes->rfc = $request->rfc;
    		$clientes->estatusCliente = $request->estatusCliente;
    		$clientes->save();

    		Flash::success("Actualizado con exito el Cliente   <b> " .$clientes->nombreCliente. " " );
    		return redirect()->route('admin.clientes.index');
    }


    public function destroy($id)

    {
    		$clientes = Clientes::find($id);
    		$clientes->delete();
    		Flash::error("El Cliente " .$clientes->nombre." ha sido eliminado con exito");
    		return redirect()->route('admin.clientes.index');

    }

    
}
