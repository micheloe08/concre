<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventas;
use App\Clientes;
use App\Productos;
use App\Http\Requests;
use App\Configuracion;
use App\DetalleVentas;
use Laracasts\Flash\Flash;

class VentasController extends Controller
{
   public function index()
    {
    	$ventas= Ventas::orderBy('id','desc')->paginate(5);
    	return view('admin.ventas.index')->with('ventas',$ventas);
    }

    public function create()
    {
        
    	$clientes= Clientes::all();
    	$productos= Productos::all();
    	return view('admin.ventas.create')
    	->with('clientes',$clientes)
    	->with('productos',$productos);
        

    }

    public function store(Request $request)
    {

       
        $ventas= new Ventas($request->all());
    		
        $ventas->claveCliente=$request->claveCliente;
        $ventas->nombreCliente=$request->nombreCliente;
        $ventas->total=$request->total_venta;
        $ventas->save();    

                $productos_id=$request->productos_id;
                $clientes_id=$request->clientes_id;
                $cantidad=$request->cantidad;
                $importe=$request->subtotal;
                $plazo=$request->plazo;
                $abono=$request->abono;
                
                $cont=0;


    		while ($cont < count($productos_id)) {

                $detalle= new DetalleVentas();
                $detalle->ventas_id=$ventas->id;
                $detalle->productos_id=$productos_id[$cont];
                $detalle->clientes_id=$clientes_id[$cont];
                $detalle->cantidad=$cantidad;
                $detalle->plazo=$plazo;
                $detalle->abono=$abono;
                $detalle->total=$importe[$cont];
                $detalle->save();
                $cont= $cont+1;
               
            }

    		Flash::success("Bien Hecho. La Venta con Folio <b>000".$detalle->ventas_id. " </b> ha sido registrado correctamente");
    		return redirect()->route('admin.ventas.index');
            
           
    }

    public function show($id)
    {


    }

    public function edit($id)
    {
    	$ventas = Ventas::find($id);
    	return view('admin.ventas.edit')->with('ventas',$ventas);

    }

    public function update(Request $request, $id)
    {
    		$ventas= Ventas::find($id);
    		$ventas->descripcion = $request->descripcion;
    		$ventas->precio = $request->precio;
    		$ventas->stock = $request->stock;
    		$ventas->save();

    		Flash::success("Actualizado con exito el Articulo   <b> " .$ventas->descripcion. " " );
    		return redirect()->route('admin.ventas.index');
    }


    public function destroy($id)

    {
    		$ventas = Ventas::find($id);
    		$ventas->delete();
    		Flash::error("El Articulo " .$ventas->descripcion." ha sido eliminado con exito");
    		return redirect()->route('admin.ventas.index');

    }

    
}
