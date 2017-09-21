@extends('admin.template.main')

@section('title','Configuracion Actual')

@section('content')


<thead>
 <th>Tasa Financiamiento</th>
 <th>% Enganche</th>
 <th>Plazo Maximo</th>
 

</thead>
	
<tbody>
	
@foreach($configuraciones as $configuracion)
<tr>

<td>{{ $configuracion->taza }}</td>
<td>{{ $configuracion->porcentaje }}</td>
<td>{{ $configuracion->plazo }}</td>

<td>


</td>
<td><a href="{{ route('admin.configuracion.edit', $configuracion->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>



</tr>
@endforeach
</tbody>
</table>
<div class="text-center"> 
{!! $configuraciones->render() !!}
</div>
@endsection