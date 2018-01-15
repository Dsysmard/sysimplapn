@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>EDITOR DE APOYOS</h1><hr/>
</div>
  <div class="row jumbotron" style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
    <div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
      {!! Form::model($apoyo, ['method' => 'PATCH', 'action' => ['ApoyosController@update', $apoyo->id]]) !!}
            
                {!! Form::hidden('id', $apoyo->id) !!}

                  <div class="form-group">
                      {!! Form::label('ID DE APOYO:', 'ID DE APOYO:') !!}
                      {!! Form::text('id_apoyo', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'ID DE APOYO']) !!}
                  </div>
                  
                  <div class="form-group">
                      {!! Form::label('NOMBRE DEL APOYO:', 'NOMBRE DEL APOYO:') !!}
                      {!! Form::text('nombreapoyo', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NOMBRE DEL APOYO']) !!}
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