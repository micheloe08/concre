
@extends('admin.template.main')

@section('title','Venta')

@section('content')

@if($productos->stock<1)
            
             <?php echo "El artículo seleccionado no cuenta con existencia, favor de verificar"?>
                 
           

@else
 


<table class="table table-striped">

<thead>
 <th>clave</th>
 <th>descripcion</th>
 <th>cantidad</th>
 <th>precio</th>
 <th>importe</th>
 <th></th>

</thead>
	
<tbody>
	


<tr>
<td>{{ $productos->claveProducto }}</td>
<td>{{ $productos->descripcion }}</td>
<td>{!!Form::text('cantidad',null,['class'=>'input-small','placeholder','required'])!!}</td>
<td>{{ $productos->precio }}</td>
<td>{{ $productos->precio }}</td>

@endif
@endsection