@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>EDITOR DE ESTADOS</h1><hr/>
</div>
  <div class="row jumbotron" style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
    <div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
      {!! Form::model($estado, ['method' => 'PATCH', 'action' => ['EstadosController@update', $estado->id]]) !!}
            
                {!! Form::hidden('id', $estado->id) !!}

                  <div class="form-group">
                      {!! Form::label('NUMERO DEL ESTADO:', 'NUMERO DEL ESTADO:') !!}
                      {!! Form::text('id_estado', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO DEL ESTADO']) !!}
                  </div>
                  
                  <div class="form-group">
                      {!! Form::label('NOMBRE DEL ESTADO:', 'NOMBRE DEL ESTADO:') !!}
                      {!! Form::text('nombreestado', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NOMBRE DEL ESTADO']) !!}
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