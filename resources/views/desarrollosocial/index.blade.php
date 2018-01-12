@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>ADMINISTRADOR DE CIUDADANOS</h1><hr/>
</div>
	<div class="row jumbotron big-padding text-center blue-grey">
		{!! Form::open(['route' => 'ciudadanos/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Buscar</label>
            <input type="text" class="form-control" name = "curp" placeholder='Ingresa dato para buscar'>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('ciudadanos.index') }}" class="btn btn-info">Mostrar Todos</a>
         <a href="{{ route('ciudadanos.create') }}" class="btn btn-success">Crear</a>
        {!! Form::close() !!}
	<br>
    <table class="table table-condensed table-striped table-bordered ">
            <thead class="nav nav-tabs white-text">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Sexo</th>
                  <th>Calle</th>
                  <th>Numero</th>
                  <th>Colonia</th>
                  <th>C.P.</th>
                  <th>Folio</th>
                  <th>Clave Del Elector</th>
                  <th>CURP</th>
                  <th>Emision</th>
                  <th>Vigencia</th>
                  <th>Foto INE</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="jumbotron">
                @foreach($ciudadanos as $ciudadano)
                <tr>
                    <td>{{ $ciudadano->id }}</td>
                    <td>{{ $ciudadano->nombre }}</td>
                    <td>{{ $ciudadano->apellido }}</td>
                    <td>{{ $ciudadano->edad }}</td>
                    <td>{{ $ciudadano->sexo }}</td>
                    <td>{{ $ciudadano->calle }}</td>
                    <td>{{ $ciudadano->numero}}</td>
                    <td>{{ $ciudadano->colonia}}</td>
                    <td>{{ $ciudadano->codigopostal}}</td>
                    <td>{{ $ciudadano->folio}}</td>
                    <td>{{ $ciudadano->clavedeelector}}</td>
                    <td>{{ $ciudadano->curp}}</td>
                    <td>{{ $ciudadano->emision}}</td>
                    <td>{{ $ciudadano->vigencia}}</td>
                    <td>{{ $ciudadano->fotoine}}</td>
                    
                    <td>
                         <a class="btn btn-primary " href="{{ url('desarrollosocial/ciudadanos/' .$ciudadano->id .'/edit')}}" >Editar</a>
                         <a class="btn btn-danger " href="{{ route('ciudadanos/destroy',['id' => $ciudadano->id] )}}" >Eliminar</a> 
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
<div class="floating">
		<a href="{{route('ciudadanos.create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection