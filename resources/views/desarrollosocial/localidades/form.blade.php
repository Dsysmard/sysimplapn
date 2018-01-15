@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
        <div class="col-md-10 col-md-offset-1" style="margin: 2% 50px 75px 100px;">

{!! Form::open(['url' => $url, 'method' => $method, 'files'=> true]) !!}
    
    <div class = "form-group">
        {{ Form::text('id_localidad', ['class'=>'form-control', 'placeholder'=>'NUMERO DE LA LOCALIDAD']) }}
    </div>

     <div class = "form-group">
        {{ Form::text('nombrelocalidad', ['class'=>'form-control', 'placeholder'=>'NOMBRE LOCALIDAD']) }}
    </div>
    
{!!  Form::close() !!}

</div>
    </div>
</div>

@endsection
