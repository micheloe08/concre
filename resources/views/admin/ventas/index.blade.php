@extends('admin.template.main')

@section('title','Lista de Ventas')

@section('content')

<a href="{{ route('admin.ventas.create') }}" class="btn btn-primary">Registrar Nueva Venta </a> <br>
<table class="table table-striped">

<thead>
 <th>Folio de Venta</th>
 <th>Clave de Cliente</th>
 <th>Nombre de Cliente</th>
 <th>Total</th>
 <th>Fecha</th>

</thead>
	
<tbody>
	
@foreach($ventas as $venta)
<tr>

<td>000{{ $venta->id }}</td>
<td>{{ $venta->claveCliente }}</td>
<td>{{ $venta->nombreCliente }}</td>
<td>${{ $venta->total }}</td>


<td><a href="{{ route('admin.ventas.edit', $venta->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>


<a href="{{ route('admin.ventas.destroy', $venta->id) }}"  onclick="return confirm('¿Seguro de Eliminarlo?')"  class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a>

</tr>
@endforeach
</tbody>
</table>
<div class="text-center"> 
{!! $ventas->render() !!}
</div>
@endsection

