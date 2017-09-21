@extends('admin.template.main')



@section('title','Registro de Venta')



@section('content')


{!!Form::open(['route'=> 'admin.ventas.store','method' => 'POST',])!!}

    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12"> 

        <label>Cliente</label>
    <select name="clientes" class="form-control select-cliente" id="clientes" >
        
            @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}_{{ $cliente->claveCliente }}_{{ $cliente->rfc }}_{{ $cliente->nombreCliente }}">{{$cliente->nombreCliente}}</option>
            @endforeach
    </select>
    
    </div>
      <div class="col-lg-1 col-sm-1 col-md-1 col-xs-8"> 

        <label>RFC</label>
        <input type="text" name="rfc"  disabled="true" id="rfc" class="form-control">

    </div>

     <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12"> 
     <label>Articulo</label>
        <select name="productos_id" class="form-control select-producto" id="productos_id" >
        
            @foreach($productos as $producto)
            <option value="{{ $producto->id }}_{{ $producto->claveProducto }}_{{ $producto->descripcion }}_{{ $producto->precio }}_{{ $producto->stock }}">{{$producto->descripcion}}</option>
            @endforeach
    </select>

    </div>
         <div class="col-lg-1 col-sm-1 col-md-1 col-xs-8"> 

        <label >Cantidad</label>
        <input type="text" name="cantidad" id="cantidad" class="form-control">

    </div>

         <div class="col-lg-1 col-sm-1 col-md-1 col-xs-8"> 

        <label>Stock</label>
        <input type="text" name="stock"  disabled="true" id="stock" class="form-control">

    </div>

     <div class="col-lg-1 col-sm-1 col-md-1 col-xs-8"> 

        <label>Precio</label>
        <input type="text" name="precio" disabled="true" id="precio" class="form-control">

    </div>



 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12"> 
     <div class="form-group"> 


           <button type="button" name="bt_add" id="bt_add" class="btn btn-primary">Agregar</button>

      </div>

    </div>


    <hr width="100%" /><br>


   <table id="detalles" class="table table-striped table-hover table-bordered table-condensed">

<thead class="btn-primary">
<th>Opciones</th>
<th>descripcion</th>
 <th>clave</th>
 
 <th>cantidad</th>
 <th>precio</th>

 <th>Subtotal</th>
 

</thead>
    
<tfoot>

<th>Total</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><h4 id="total">s/. 0.00</h4> <input type="hidden" name="total_venta" id="total_venta"><input type="hidden" name="claveCliente" id="claveCliente"><input type="hidden" name="nombreCliente" id="nombreCliente"></th>

</tfoot>

<tbody>
    

</tbody>

</table>



    <hr width="100%" /><br>

        </div>
         <div class="form-group"> 
            <div class="col-lg-4">
        <label>Enganche</label>
       
        <input type="number" name="abono" id="abono" class="form-control">
        </div>
    

         <div class="form-group"> 
            <div class="col-lg-4">
        <label>Bonificacion</label>
  
        <input type="number" name="bonificacion"  disabled="true" id="bonificacion" class="form-control">
        </div>
    

     <div class=class="form-group"> 
        <div class="col-lg-4">
        <label>Gran Total</label>
       
        <input type="number" name="final" disabled="true" id="final" class="form-control">


    </div>
</div>

 <hr width="100%" /><br>

<h1 class="btn btn-primary"> Abonos Mensuales </h1><br><br>

<table class="table table-striped table-hover table-bordered table-condensed">
<tr>    
<td><h4>PRECIO DE CONTADO</h4></td>
<td><h4 id="pagos"></h4></td>
<td><h4 id="totalpago"></h4></td>
<td><h4 id="ahorro"></h4></td>
<td><input type="radio" name="plazo" id="plazo" value="1"></td>
 </tr>  
 <tr>    
<td><h4>3 ABONOS DE</h4></td>
<td><h4 id="pagos3"></h4></td>
<td><h4 id="totalpago3"></h4></td>
<td><h4 id="ahorro3"></h4></td>
<td><input type="radio" name="plazo" id="plazo" value="3"></td>
 </tr>   
  <tr>    
<td><h4>6 ABONOS DE</h4></td>
<td><h4 id="pagos6"></h4></td>
<td><h4 id="totalpago6"></h4></td>
<td><h4 id="ahorro6"></h4></td>
<td><input type="radio" name="plazo" id="plazo" value="6"></td>
 </tr>  
   <tr>    
<td><h4>9 ABONOS DE</h4></td>
<td><h4 id="pagos9"></h4></td>
<td><h4 id="totalpago9"></h4></td>
<td><h4 id="ahorro9"></h4></td>
<td><input type="radio" name="plazo" id="plazo" value="9"></td>
 </tr> 
    <tr>    
<td><h4>12 ABONOS DE</h4></td>
<td><h4 id="pagos12"></h4></td>
<td><h4 id="totalpago12"></h4></td>
<td><h4 id="ahorro12"></h4></td>
<td><input type="radio" name="plazo" id="plazo" value="12"></td>
 </tr> 
</table>



      <br><br><br><br><br>

         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
         <div class="form-group">

         <button class="btn btn-primary" type="sumbit">Guardar</button>
         <button class="btn btn-danger" type="reset">Cancelar</button> 
         </div>
         
    



    {!! Form::close()!!}

   



    @endsection
  
    

    @section('js')

      <script> 
     $('.select-cliente').chosen({


        });

     $('.select-producto').chosen({


        });


        </script>

 <script>

    $(document).ready(function(){

 $('#bt_add').click(function(){

    agregar();

    });
});

var 
cont=0;
total=0;

subtotal=[];
$("#guardar").hide();
$('#productos_id').change(function(){

    mostrarvalores();
});
   
   $('#clientes').change(function(){

    mostrarcliente();
});     

  

        function mostrarvalores(){
            
            var DatosArticulo=document.getElementById('productos_id').value.split('_');
            
            $("#claveProducto").val(DatosArticulo[1]);
            $("#precio").val(DatosArticulo[3]);
            $("#stock").val(DatosArticulo[4]);

        
}

 function mostrarcliente(){
            
            var DatosClientes=document.getElementById('clientes').value.split('_');
            
           
            $("#rfc").val(DatosClientes[2]);
            $("#clientes_id").val(DatosClientes[0]);
            $("#claveCliente").val(DatosClientes[1]);
            $("#nombreCliente").val(DatosClientes[3]);
           

        
}




    function agregar(){

  var DatosArticulo=document.getElementById('productos_id').value.split('_');
  var DatosClientes=document.getElementById('clientes').value.split('_');          
            id=DatosArticulo[0];
            claveProducto=DatosArticulo[1];
            descripcion=$("#productos_id option:selected").text();
            cantidad=$("#cantidad").val();
            precio=DatosArticulo[3];
            stock=DatosArticulo[4];
            clientes_id=DatosClientes[0];
            claveCliente=DatosClientes[1];
            nombreCliente=DatosClientes[3];
            tasa=2.8;
            plazo=12;
           
            tasa3=(tasa*3/100 +1);
            tasa6=(tasa*6/100 +1);
             tasa9=(tasa*9/100 +1);
             tasa12=(tasa*12/100 +1);
             importe=(cantidad*precio);
            
           

            if(cantidad>0){


                if(stock>=cantidad){

                    subtotal[cont]=(cantidad*precio);
                    total=total+subtotal[cont];
                     abono=(total*0.2);
                     aux=(tasa*plazo / 100);
                     auxc=(aux+1);
                     bonificacion=(abono*aux ) ;
                     final=total-abono-bonificacion;
                     finalcontado=final/auxc;
                     ahorra=final-finalcontado;
                     final3=(finalcontado*tasa3);
                     ahorro3=final-final3;
                     pagos3=(final3/3);
                     final6=(finalcontado*tasa6);
                     ahorro6=(final-final6);
                     pagos6=(final6/6);
                     final9=(finalcontado*tasa9);
                     ahorro9=(final-final9);
                     pagos9=(final9/9);
                     final12=(finalcontado*tasa12);
                     ahorro12=(final-final12);
                     pagos12=(final12/12);
                    var
                    fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name=productos_id[]" value="'+id+'">'+descripcion+'<input type="hidden" name=clientes_id[]" value="'+clientes_id+'"><input type="hidden" name=nombreCliente" value="'+nombreCliente+'"><input type="hidden" name=claveCliente" value="'+claveCliente+'"><td><input type="text" name="claveProducto[]" value="'+claveProducto+'" disabled="true"></td><td><input type="number" name="cantidad" value="'+cantidad+'"></td><td><input type="number" name="precio[]" value="'+precio+'"></td><td><input type="number" name="subtotal[]" value="'+subtotal[cont]+'"></td></tr>';

                    $("#abono").val(abono);
                    $("#bonificacion").val(bonificacion);
                    $("#final").val(final);


                    cont++;
                    limpiar();
                    $("#total").html("$ "+total);
                    $("#pagos").html(finalcontado);
                    $("#totalpago").html("Total a Pagar $ "+finalcontado);
                    $("#ahorro").html("Ud se Ahorra $ "+ahorra);
                    $("#pagos3").html("$ "+pagos3);
                    $("#totalpago3").html("Total a Pagar $ "+final3);
                    $("#ahorro3").html("Ud se Ahorra $ "+ahorro3);
                    $("#pagos6").html("$ "+pagos6);
                    $("#totalpago6").html("Total a Pagar $ "+final6);
                    $("#ahorro6").html("Ud se Ahorra $ "+ahorro6);
                    $("#pagos9").html("$ "+pagos9);
                    $("#totalpago9").html("Total a Pagar $ "+final9);
                    $("#ahorro9").html("Ud se Ahorra $ "+ahorro9);
                    $("#pagos12").html("$ "+pagos12);
                    $("#totalpago12").html("Total a Pagar $ "+final12);
                    $("#ahorro12").html("Ud se Ahorra $ "+ahorro12);
                    $("#total_venta").val(total);
                    evaluar();
                    $("#detalles").append(fila);


                }else{
                    alert("El artículo seleccionado no cuenta con existencia, favor de verificar")
                }

            }else{
                alert("Revise los datos del Articulo")
            }

    }

function limpiar(){
    $("#id_productos")
    $("#cantidad").val("");
    $("#precio").val("");
}

function evaluar(){

    if(total>0){

        $(guardar).show();

    }
        else{
            $(guardar).hide();
        }

}

function eliminar(index){

total=total-subtotal[index];
$("#total").html("S/."+total);
$("#fila"+index).remove();
evaluar();

}
        
        </script>   
        
       
   
       

     
            
          
        </div>

        
      


    @endsection


     