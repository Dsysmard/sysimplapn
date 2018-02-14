@extends('layouts.menu')


@section('content')

<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>ADMINISTRADOR DE SALIDAS DE APOYO</h1><hr/>
</div>
  <div class="row jumbotron big-padding text-center blue-grey">
    {!! Form::open(['route' => 'salidas/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Buscar</label>
            <input type="text" class="form-control" name = "curp" placeholder='Ingresa dato para buscar'>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('salidas.index') }}" class="btn btn-info">Mostrar Todos</a>
         <a href="{{ route('salidas.create') }}" class="btn btn-success">Crear</a>
        {!! Form::close() !!}
  <br>
    <table class="table table-condensed table-striped table-bordered ">
            <thead class="nav nav-tabs white-text">
                <tr>
                  <th>ID</th>
                  <th>CURP</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>CALLE</th>
                  <th>NUMERO</th>
                  <th>COLONIA</th>
                  <th>ESTADO</th>
                  <th>MUNICIPIO</th>
                  <th>LOCALIDAD</th>
                  <th>SECCION</th>
                  <th>APOYO</th>
                  <th>OBSERVACIONES</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="jumbotron">
                @foreach($salidas as $salida)
                <tr>
                    <td>{{ $salida->id }}</td>
                    <td>{{ $salida->curp }}</td>
                    <td>{{ $salida->nombre}}</td>
                    <td>{{ $salida->apellido }}</td>
                    <td>{{ $salida->calle }}</td>
                    <td>{{ $salida->numero }}</td>
                    <td>{{ $salida->colonia }}</td>
                    <td>{{ $salida->nombreestado }}</td>
                    <td>{{ $salida->nombremunicipio }}</td>
                    <td>{{ $salida->nombrelocalidad }}</td>
                    <td>{{ $salida->nombreseccion }}</td>
                    <td>{{ $salida->nombreapoyo }}</td>
                    <td>{{ $salida->observaciones }}</td>
                    <td>
                         <a class="btn btn-primary " href="{{ url('desarrollosocial/salidas/' .$salida->id .'/edit')}}" >Editar</a>
                         <a class="btn btn-danger " href="{{ route('salidas/destroy',['id' => $salida->id] )}}" >Eliminar</a> 
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
<div class="floating">
    <a href="{{route('salidas.create')}}" class="btn btn-primary btn-fab">
      <i class="material-icons">add</i>
    </a>
  </div>
@endsection 