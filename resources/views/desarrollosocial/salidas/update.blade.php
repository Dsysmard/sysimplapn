@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>EDITOR DE MUNICIPIOS</h1><hr/>
</div>
  <div class="row jumbotron" style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
    <div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
      {!! Form::model($salida, ['method' => 'PATCH', 'action' => ['SalidasDesarrolloSocialController@update', $salida->id]]) !!}
            
                {!! Form::hidden('id', $salida->id) !!}

                  <div class="form-group">
                      {!! Form::label('CURP:', 'CURP:') !!}
                      {!! Form::text('curp', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'CURP']) !!}
                  </div>
                  
                  <div class="form-group">
                      {!! Form::label('NUMERO ESTADO:', 'NUMERO ESTADO:') !!}
                      {!! Form::text('id_estado', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO ESTADO']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('NUMERO MUNICIPIO:', 'NUMERO MUNICIPIO:') !!}
                      {!! Form::text('id_municipio', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO MUNICIPIO']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('NUMERO LOCALIDAD:', 'NUMERO LOCALIDAD:') !!}
                      {!! Form::text('id_localidad', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO LOCALIDAD']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('NUMERO SECCION:', 'NUMERO SECCION:') !!}
                      {!! Form::text('id_seccion', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO SECCION']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('TIPO DE APOYO:', 'TIPO DE APOYO:') !!}
                      {!! Form::text('id_apoyo', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'TIPO DE APOYO']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('OBSERVACIONES:', 'OBSERVACIONES:') !!}
                      {!! Form::text('observaciones', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'OBSERVACIONES']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('FIRMA CIUDADANO:', 'FIRMA CIUDADANO:') !!}
                      {!! Form::text('firmaciudadano', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'FIRMA CIUDADANO']) !!}
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