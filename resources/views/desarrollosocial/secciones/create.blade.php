@extends('layouts.menu')


@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>REGISTRAR UNA NUEVA SECCION</h1><hr/>
</div>
	<div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
		<div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
			{!! Form::open(['route' => 'secciones.store', 'method' => 'post', 'novalidate']) !!}

                  <div class="form-group">
                      {!! Form::label('NUMERO DE DE SECCION:', 'NUMERO DE DE SECCION:') !!}
                      {!! Form::text('id_seccion', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO DE DE SECCION']) !!}
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
           format: 'yyyy-mm-dd'
         });  
    </script> 
@endsection
