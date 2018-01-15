@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>EDITOR DE SECCIONES</h1><hr/>
</div>
  <div class="row jumbotron" style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
    <div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
      {!! Form::model($secciones, ['method' => 'PATCH', 'action' => ['SeccionesController@update', $secciones->id]]) !!}
            
                {!! Form::hidden('id', $secciones->id) !!}

                  <div class="form-group">
                      {!! Form::label('NUMERO DE SECCION:', 'NUMERO DE SECCION:') !!}
                      {!! Form::text('id_seccion', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO DE SECCION']) !!}
                  </div>
                  
                  <div class="form-group">
                      {!! Form::label('NOMBRE DE SECCION:', 'NOMBRE DE SECCION:') !!}
                      {!! Form::text('nombreseccion', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NOMBRE DE SECCION']) !!}
                  </div>
            
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
    </div>
  </div>
</div>
<script type="text/javascript">  
        $('.date').datepicker({  
           format: 'mm-dd-yyyy',
           language: "es"
         });  
    </script> 
@endsection