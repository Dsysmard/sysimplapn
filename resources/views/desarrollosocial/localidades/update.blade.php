@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>EDITOR DE MUNICIPIOS</h1><hr/>
</div>
  <div class="row jumbotron" style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
    <div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
      {!! Form::model($localidades, ['method' => 'PATCH', 'action' => ['LocalidadesController@update', $localidades->id]]) !!}
            
                {!! Form::hidden('id', $localidades->id) !!}

                  <div class="form-group">
                      {!! Form::label('NUMERO DE LA LOCALIDAD:', 'NUMERO DE LA LOCALIDAD:') !!}
                      {!! Form::text('id_localidad', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO DE LA LOCALIDAD']) !!}
                  </div>
                  
                  <div class="form-group">
                      {!! Form::label('NOMBRE DE LA LOCALIDAD:', 'NOMBRE DE LA LOCALIDAD:') !!}
                      {!! Form::text('nombrelocalidad', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NOMBRE DE LA LOCALIDAD']) !!}
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