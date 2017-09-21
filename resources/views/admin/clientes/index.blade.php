@extends('admin.template.main')

@section('title','Lista de Clientes')

@section('content')
<a href="{{ route('admin.clientes.create') }}" class="btn btn-primary">Registrar Nuevo Cliente </a> <br>
<table class="table table-striped">

<thead>
 <th>Clave de Cliente</th>
 <th>Nombre</th>
 <th>Situación</th>

</thead>
	
<tbody>
	
@foreach($clientes as $cliente)
<tr>

<td>{{ $cliente->claveCliente }}</td>
<td>{{ $cliente->nombreCliente }}</td>

<td>
@if($cliente->estatusCliente=="ACTIVO")

<span class="label label-success">{{ $cliente->estatusCliente }}</span>

@else

<span class="label label-danger">{{ $cliente->estatusCliente }}</span>

@endif

</td>
<td><a href="{{ route('admin.clientes.edit', $cliente->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>


<a href="{{ route('admin.clientes.destroy', $cliente->id) }}"  onclick="return confirm('¿Seguro de Eliminarlo?')"  class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a>

</tr>
@endforeach
</tbody>
</table>
<div class="text-center"> 
{!! $clientes->render() !!}
</div>
@endsection