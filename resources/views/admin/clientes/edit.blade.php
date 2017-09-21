@extends('admin.template.main')

@section('title','Modificar Cliente con la Clave      <b>   ' .$clientes->claveCliente.'   ')



@section('content')




    {!!Form::open(['route'=> ['admin.clientes.update',$clientes],'method' => 'PUT',])!!}

     <div class="form-group"> 

        {!!Form::label('nombreCliente','Nombre') !!}
        {!!Form::text('nombreCliente',$clientes->nombreCliente,['class'=>'form-control','required'])!!}

    </div>

     <div class="form-group"> 

        {!!Form::label('rfc','R.F.C.') !!}
        {!!Form::text('rfc',$clientes->rfc,['class'=>'form-control','required'])!!}

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




     