@extends('layouts.menu')


@section('content')
<div class="container-fluid">
    <div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
        <div class="col-md-10 col-md-offset-1">
{!! Form::open(['url' => $url, 'method' => $method, 'files'=> true]) !!}

     <div class = "form-group">
        {{ Form::text('nombre', ['class'=>'form-control', 'placeholder'=>'NOMBRE']) }}
    </div>

     <div class = "form-group">
        {{ Form::text('apellido', ['class'=>'form-control', 'placeholder'=>'APELLIDO']) }}
    </div>

     <div class = "form-group">
        {{ Form::text('edad', ['class'=>'form-control', 'placeholder'=>'EDAD']) }}
    </div>

     <div class = "form-group">
        {{ Form::text('sexo', ['class'=>'form-control', 'placeholder'=>'SEXO']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('calle', ['class'=>'form-control', 'email', 'placeholder'=>'CALLE']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('numero', ['class'=>'form-control', 'placeholder'=>'NUMERO']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('colonia', ['class'=>'form-control', 'placeholder'=>'COLONIA']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('codigopostal', ['class'=>'form-control', 'placeholder'=>'CODIGO P.']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('folio', ['class'=>'form-control', 'placeholder'=>'FOLIO']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('clavedeelector', ['class'=>'form-control', 'placeholder'=>'CLAVE DE ELECTOR']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('curp', ['class'=>'form-control', 'placeholder'=>'CURP']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('emision', ['class'=>'form-control', 'placeholder'=>'EMISION']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('vigencia', ['class'=>'form-control', 'placeholder'=>'VIGENCIA']) }}
    </div>
{!!  Form::close() !!}

</div>
    </div>
</div>

@endsection
