@extends('admin.template.main')

@section('title','Modificar Articulo  <b>'     .$productos->claveProducto. '  ')



@section('content')




    {!!Form::open(['route'=> ['admin.articulos.update',$productos],'method' => 'PUT',])!!}

    

     <div class="form-group"> 

        {!!Form::label('descripcion','Descripcion') !!}
        {!!Form::text('descripcion',$productos->descripcion,['class'=>'form-control','required'])!!}

    </div>

     <div class="form-group"> 

        {!!Form::label('precio','Precio') !!} 
        
        {!!Form::text('precio',$productos->precio,['class'=>'form-control','required'])!!}
        
    </div>

          <div class="form-group"> 

        {!!Form::label('stock','Existencia') !!}
        {!!Form::text('stock',$productos->stock,['class'=>'form-control','required'])!!}

    </div> 


        <br>
        <div class="form-group"> 


            {!!Form::submit('Guardar',['class'=>'btn btn-success'])!!}

      

    </div>
    {!! Form::close()!!}

    @endsection




     