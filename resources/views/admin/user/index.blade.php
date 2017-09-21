@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('content')
<a href="{{ route('admin.users.create') }}" class="btn btn-primary">Registrar Nuevo Usuario</a> <br>
<table class="table table-striped">

<thead>
 <th>ID</th>
 <th>Nombre</th>
 <th>Correo</th>
 <th>Tipo</th>
 <th>Acciones</th>

</thead>
	
<tbody>
	
@foreach($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>
@if($user->type=="ADMIN")

<span class="label label-success">{{ $user->type }}</span>

@else

<span class="label label-primary">{{ $user->type }}</span>

@endif

</td>
<td><a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>


<a href="{{ route('admin.users.destroy', $user->id) }}"  onclick="return confirm('¿Seguro de Eliminarlo?')"  class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a>

<a href=""  title="Listar Estudios"  class="btn btn-primary"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></a>





</td>


</tr>
@endforeach
</tbody>
</table>
<div class="text-center"> 
{!! $users->render() !!}
</div>
@endsection