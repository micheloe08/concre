@extends('admin.template.main')

@section('title','Lista de Articulos')

@section('content')
<a href="{{ route('admin.articulos.create') }}" class="btn btn-primary">Registrar Nuevo Articulo </a> <br>
<table class="table table-striped">

<thead>
 <th>Clave de Articulo</th>
 <th>Descripcion</th>
 <th>Precio</th>
 <th>Stock</th>
 

</thead>
	
<tbody>
	
@foreach($productos as $producto)
<tr>

<td>{{ $producto->claveProducto }}</td>
<td>{{ $producto->descripcion }}</td>
<td>{{ $producto->precio }}</td>
<td>{{ $producto->stock }}</td>

<td>


</td>
<td><a href="{{ route('admin.articulos.edit', $producto->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>


<a href="{{ route('admin.articulos.destroy', $producto->id) }}"  onclick="return confirm('¿Seguro de Eliminarlo?')"  class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a>

</tr>
@endforeach
</tbody>
</table>
<div class="text-center"> 
{!! $productos->render() !!}
</div>
@endsection