@extends('layouts.menu')


@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>REGISTRAR SALIDAS DE APOYO</h1><hr/>
</div>
	<div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
		<div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
			{!! Form::open(['route' => 'salidas.store', 'method' => 'post', 'novalidate']) !!}

                  <div class="form-group">
                      {!! Form::label('CURP:', 'CURP:') !!}
                      {!! Form::text('curp', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'CURP']) !!}
                  </div>
                  
                  <div class="form-group">
                      {{-- {!! Form::label('NUMERO ESTADO:', 'NUMERO ESTADO:') !!}
                      {!! Form::text('id_estado', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO ESTADO']) !!} --}}
                      {!! Form::label("NUMERO ESTADO","NUMERO ESTADO") !!}
                      <select class="form-control" id="id_estado" name="id_estado" >
                        @foreach($estados as $estado)
                        <option>{{$estado->id_estado}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      {!! Form::label('NUMERO MUNICIPIO:', 'NUMERO MUNICIPIO:') !!}
                      {{-- {!! Form::text('id_municipio', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO MUNICIPIO']) !!}--}}
                      <select class="form-control" id="id_municipio" name="id_municipio">
                        @foreach($municipios as $municipio)
                        <option>{{$municipio->id_municipio}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      {!! Form::label('NUMERO LOCALIDAD:', 'NUMERO LOCALIDAD:') !!}
                      {{-- {!! Form::text('id_localidad', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO LOCALIDAD']) !!}
                       --}}
                       <select class="form-control" id="id_localidad" name="id_localidad">
                        @foreach($localidad as $localidad)
                        <option>{{$localidad->id_localidad}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      {!! Form::label('NUMERO SECCION:', 'NUMERO SECCION:') !!}
                      {{-- {!! Form::text('id_seccion', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO SECCION']) !!} --}}
                      <select class="form-control" id="id_seccion" name="id_seccion">
                        @foreach($seccion as $seccion)
                        <option>{{$seccion->id_seccion}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      {!! Form::label('TIPO DE APOYO:', 'TIPO DE APOYO:') !!}
                      {{-- {!! Form::text('id_apoyo', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'TIPO DE APOYO']) !!} --}}
                        <select class="form-control" id="id_apoyo" name="id_apoyo">
                        @foreach($apoyo as $apoyo)
                        <option>{{$apoyo->id_apoyo}}</option>
                        @endforeach
                        </select>
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
           format: 'yyyy-mm-dd'
         });  
    </script> 
@endsection
