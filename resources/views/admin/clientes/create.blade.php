@extends('admin.template.main')

@section('title','Alta Cliente')



@section('content')




    {!!Form::open(['route'=> 'admin.clientes.store','method' => 'POST',])!!}

     <div class="form-group"> 

        {!!Form::label('nombreCliente','Nombre(s)') !!}
        {!!Form::text('nombreCliente',null,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}

    </div>

     <div class="form-group"> 

        {!!Form::label('rfc','R.F.C.') !!}
        {!!Form::text('rfc',null,['class'=>'form-control','placeholder'=>'R.F.C.','required'])!!}

    </div>

     <div class="form-group"> 

        {!!Form::label('claveCliente','Clave de Cliente') !!}
        {!!Form::text('claveCliente',null,['class'=>'form-control','placeholder'=>'Clave de Cliente','required'])!!}

    </div>

           <div class="form-group"> 

        {!!Form::label('estatusCliente','Situación') !!}
        {!!Form::select('estatusCliente',[''=>'Situacion..','ACTIVO'=>'Activo','INACTIVO'=>'Inactivo'],null,['class'=>'form-control'])!!}
       
         </div>


        <br>
        <div class="form-group"> 


            {!!Form::submit('Guardar',['class'=>'btn btn-success'])!!}

      

    </div>
    {!! Form::close()!!}

    @endsection




     