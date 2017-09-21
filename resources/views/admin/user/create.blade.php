@extends('admin.template.main')

@section('title','Crear Usuario')



@section('content')




    {!!Form::open(['route'=> 'admin.users.store','method' => 'POST',])!!}

    <div class="form-group"> 

        {!!Form::label('name','Nombre') !!}
        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre completo','required'])!!}

    </div>
    <div class="form-group"> 

        {!!Form::label('email','Correo Electronico') !!}
        {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Correo','required'])!!}

    </div>
    <div class="form-group"> 

        {!!Form::label('password','Contraseña') !!}
        {!!Form::password('password',['class'=>'form-control','placeholder'=>'********','required'])!!}

    </div>
    <div class="form-group"> 

        {!!Form::label('type','Tipo') !!}
        {!!Form::select('type',[''=>'seleccione un nivel..','MEMBER'=>'Miembro','ADMIN'=>'Administrador'],null,['class'=>'form-control'])!!}
        <br>
        <div class="form-group"> 


            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

        </div>

    </div>
    {!! Form::close()!!}

    @endsection