@extends('admin.template.main')

@section('title','Alta Articulo')



@section('content')




    {!!Form::open(['route'=> 'admin.articulos.store','method' => 'POST',])!!}

     <div class="form-group"> 

        {!!Form::label('claveProducto','Clave') !!}
        {!!Form::text('claveProducto',null,['class'=>'form-control','placeholder'=>'Clave','required'])!!}

    </div>

     <div class="form-group"> 

        {!!Form::label('descripcion','Descripcion') !!}
        {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required'])!!}

    </div>

     <div class="form-group"> 

        {!!Form::label('precio','Precio') !!}
        
        {!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'$0.00','required'])!!}
        
    </div>

          <div class="form-group"> 

        {!!Form::label('stock','Existencia') !!}
        {!!Form::text('stock',null,['class'=>'form-control','placeholder'=>'Existencia','required'])!!}

    </div> 


        <br>
        <div class="form-group"> 


            {!!Form::submit('Guardar',['class'=>'btn btn-success'])!!}

      

    </div>
    {!! Form::close()!!}

    @endsection




     