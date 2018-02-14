@extends('layouts.menu')


@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>REGISTRAR NUEVA LOCALIDAD</h1><hr/>
</div>
	<div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
		<div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
			{!! Form::open(['route' => 'localidades.store', 'method' => 'post', 'novalidate']) !!}

                  <div class="form-group">
                      {!! Form::label('NUMERO DE LOCALIDAD:', 'NUMERO DE LOCALIDAD:') !!}
                      {!! Form::text('id_localidad', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO DE LOCALIDAD']) !!}
                  </div>
                  
                  <div class="form-group">
                      {!! Form::label('NOMBRE LOCALIDAD:', 'NOMBRE LOCALIDAD:') !!}
                      {!! Form::text('nombrelocalidad', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NOMBRE LOCALIDAD']) !!}
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
           format: 'yyyy-mm-dd'
         });  
    </script> 
@endsection
