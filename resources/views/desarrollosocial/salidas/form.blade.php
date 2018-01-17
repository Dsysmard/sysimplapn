@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
        <div class="col-md-10 col-md-offset-1" style="margin: 2% 50px 75px 100px;">

{!! Form::open(['url' => $url, 'method' => $method, 'files'=> true]) !!}
    
    <div class = "form-group">
        {{ Form::text('curp', ['class'=>'form-control', 'placeholder'=>'CURP']) }}
    </div>

     <div class = "form-group">
        {{ Form::text('id_estado', ['class'=>'form-control', 'placeholder'=>'NUMERO DE ESTADO']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('id_municipio', ['class'=>'form-control', 'placeholder'=>'NUMERO MUNICIPIO']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('id_localidad', ['class'=>'form-control', 'placeholder'=>'NUMERO DE LOCALIDAD']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('id_seccion', ['class'=>'form-control', 'placeholder'=>'NUMERO DE SECCION']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('id_apoyo', ['class'=>'form-control', 'placeholder'=>'NUMERO DE APOYO']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('observaciones', ['class'=>'form-control', 'placeholder'=>'OBSERVACIONES']) }}
    </div>

    <div class = "form-group">
        {{ Form::text('firmaciudadanos', ['class'=>'form-control', 'placeholder'=>'FIRMA CIUDADANO']) }}
    </div>
    
{!!  Form::close() !!}

</div>
    </div>
</div>

@endsection
