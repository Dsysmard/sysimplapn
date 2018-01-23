@extends('layouts.menu')


@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>REGISTRAR UN NUEVO CIUDADANO</h1><hr/>
</div>
	<div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
		<div class="col-md-10 col-md-offset-1" style="margin: 2% 50px 75px 100px;">
			{!! Form::open(['route' => 'ciudadanos.store', 'method' => 'post', 'novalidate','files' => true] 
      ) !!}

                  <div class="form-group">
                      {!! Form::label('NOMBRE:', 'NOMBRE:') !!}
                      {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NOMBRE']) !!}
                  </div>
                  
                  <div class="form-group">
                      {!! Form::label('APELLIDO:', 'APELLIDO:') !!}
                      {!! Form::text('apellido', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'APELLIDO']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('EDAD:', 'EDAD:') !!}
                      {!! Form::text('edad', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'EDAD']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('SEXO:', 'SEXO:') !!}
                      {!! Form::text('sexo', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'SEXO']) !!}

                  </div>

                  <div class="form-group">
                      {!! Form::label('CALLE:', 'CALLE:') !!}
                      {!! Form::text('calle', null, ['class' => 'form-control', 'email', 'required' => 'required','placeholder'=>'CALLE']) !!}
                  </div>


                  <div class="form-group">
                      {!! Form::label('NUMERO:', 'NUMERO:') !!}
                      {!! Form::text('numero', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'NUMERO']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('COLONIA:', 'COLONIA:') !!}
                      {!! Form::text('colonia', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'COLONIA']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('CODIGO P.:', 'CODIGO P.:') !!}
                      {!! Form::text('codigopostal', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'CODIGO POSTAL']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('FOLIO:', 'FOLIO:') !!}
                      {!! Form::text('folio', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'FOLIO']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('CLAVE:', 'CLAVE:') !!}
                      {!! Form::text('clavedeelector', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'CLAVE DEL ELECTOR']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('CURP:', 'CURP:') !!}
                      {!! Form::text('curp', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'CURP']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('EMISION:', 'EMISION:') !!}
                      {!! Form::text('emision', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'EMISION DEL INE']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('VIGENCIA:', 'VIGENCIA:') !!}
                      {!! Form::text('vigencia', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'VIGENCIA DEL INE']) !!}
                  </div>

                  <div class="col-md-10 col-md-offset-1">
                        {!! Form::label('CARGAR FOTO INE:','CARGAR FOTO INE:') !!}
                        {!! Form::file('fotoine') !!}
                        {{-- <label>Cargar Foto INE</label>
                        <input type="file" name="fotoine">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        
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
