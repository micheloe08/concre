@extends('admin.template.main')

@section('title','Editar Usuario '.$users->name)



@section('content')

{!!Form::open(['route'=> ['admin.users.update', $users],'method'=>'PUT'])!!}

<div class="form-group"> 

{!!Form::label('name','Nombre') !!}
{!!Form::text('name', $users->name, ['class'=>'form-control','placeholder'=>'Nombre completo','required'])!!}

</div>
<div class="form-group"> 

{!!Form::label('email','Correo Electronico') !!}
{!!Form::text('email',$users->email,['class'=>'form-control','placeholder'=>'Correo','required'])!!}

</div>

<div class="form-group"> 

{!!Form::label('type','Tipo') !!}
{!!Form::select('type',[''=>'seleccione un nivel..','MEMBER'=>'Miembro','ADMIN'=>'Administrador'],$users->type,['class'=>'form-control'])!!}
<br>
<div class="form-group"> 


{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}

</div>

</div>
{!! Form::close()!!}

@endsection