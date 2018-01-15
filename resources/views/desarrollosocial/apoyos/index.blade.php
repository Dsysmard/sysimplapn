@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>ADMINISTRADOR DE APOYOS</h1><hr/>
</div>
  <div class="row jumbotron big-padding text-center blue-grey">
    {!! Form::open(['route' => 'apoyos/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Buscar</label>
            <input type="text" class="form-control" name = "id_apoyo" placeholder='Ingresa dato para buscar'>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('apoyos.index') }}" class="btn btn-info">Mostrar Todos</a>
         <a href="{{ route('apoyos.create') }}" class="btn btn-success">Crear</a>
        {!! Form::close() !!}
  <br>
    <table class="table table-condensed table-striped table-bordered ">
            <thead class="nav nav-tabs white-text">
                <tr>
                  <th>ID</th>
                  <th>ID Apoyo</th>
                  <th>Nombre de Apoyo</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="jumbotron">
                @foreach($apoyos as $apoyo)
                <tr>
                    <td>{{ $apoyo->id }}</td>
                    <td>{{ $apoyo->id_apoyo }}</td>
                    <td>{{ $apoyo->nombreapoyo }}</td>
                    <td>
                         <a class="btn btn-primary " href="{{ url('desarrollosocial/apoyos/' .$apoyo->id .'/edit')}}" >Editar</a>
                         <a class="btn btn-danger " href="{{ route('apoyos/destroy',['id' => $apoyo->id] )}}" >Eliminar</a> 
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
<div class="floating">
    <a href="{{route('apoyos.create')}}" class="btn btn-primary btn-fab">
      <i class="material-icons">add</i>
    </a>
  </div>
@endsection