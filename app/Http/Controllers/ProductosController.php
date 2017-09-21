<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Productos;
use App\Clientes;
class ProductosController extends Controller
{
   public function index()
    {
    	$productos= Productos::orderBy('id','desc')->paginate(5);
    	return view('admin.articulos.index')->with('productos',$productos);
    }

    public function create()
    {
    	return view('admin.articulos.create');
    }


     public function buscar(Request $request){

            $clientes= Clientes::find($request->clientes_id);
           $productos= Productos::find($request->productos_id);
            
            

                
        return view('admin.articulos.buscar')
        ->with('productos',$productos)
         ->with('clientes',$clientes);


            
     }  
    

    public function store(Request $request)
    {
    		$productos = new Productos($request->all());
    		$productos->save();

    		Flash::success("Bien Hecho. El Articulo ha sido registrado correctamente");
    		return redirect()->route('admin.articulos.index');
    }

    public function show($id)
    {


    }

    public function edit($id)
    {
    	$productos = Productos::find($id);
    	return view('admin.articulos.edit')->with('productos',$productos);

    }

    public function update(Request $request, $id)
    {
    		$productos= Productos::find($id);
    		$productos->descripcion = $request->descripcion;
    		$productos->precio = $request->precio;
    		$productos->stock = $request->stock;
    		$productos->save();

    		Flash::success("Actualizado con exito el Articulo   <b> " .$productos->descripcion. " " );
    		return redirect()->route('admin.articulos.index');
    }


    public function destroy($id)

    {
    		$productos = Productos::find($id);
    		$productos->delete();
    		Flash::error("El Articulo " .$productos->descripcion." ha sido eliminado con exito");
    		return redirect()->route('admin.articulos.index');

    }

    
}
