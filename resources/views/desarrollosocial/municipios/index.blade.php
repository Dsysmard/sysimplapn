@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>ADMINISTRADOR DE MUNICIPIOS</h1><hr/>
</div>
  <div class="row jumbotron big-padding text-center blue-grey">
    {!! Form::open(['route' => 'municipios/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Buscar</label>
            <input type="text" class="form-control" name = "id_municipio" placeholder='Ingresa dato para buscar'>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('municipios.index') }}" class="btn btn-info">Mostrar Todos</a>
         <a href="{{ route('municipios.create') }}" class="btn btn-success">Crear</a>
        {!! Form::close() !!}
  <br>
    <table class="table table-condensed table-striped table-bordered ">
            <thead class="nav nav-tabs white-text">
                <tr>
                  <th>ID</th>
                  <th>ID Municipio</th>
                  <th>Nombre Municipio</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="jumbotron">
                @foreach($municipios as $municipio)
                <tr>
                    <td>{{ $municipio->id }}</td>
                    <td>{{ $municipio->id_municipio }}</td>
                    <td>{{ $municipio->nombremunicipio }}</td>
                    <td>
                         <a class="btn btn-primary " href="{{ url('desarrollosocial/municipios/' .$municipio->id .'/edit')}}" >Editar</a>
                         <a class="btn btn-danger " href="{{ route('municipios/destroy',['id' => $municipio->id] )}}" >Eliminar</a> 
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
<div class="floating">
    <a href="{{route('municipios.create')}}" class="btn btn-primary btn-fab">
      <i class="material-icons">add</i>
    </a>
  </div>
@endsection