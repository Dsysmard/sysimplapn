@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>ADMINISTRADOR DE SECCIONES</h1><hr/>
</div>
  <div class="row jumbotron big-padding text-center blue-grey">
    {!! Form::open(['route' => 'secciones/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Buscar</label>
            <input type="text" class="form-control" name = "id_seccion" placeholder='Ingresa dato para buscar'>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('secciones.index') }}" class="btn btn-info">Mostrar Todos</a>
         <a href="{{ route('secciones.create') }}" class="btn btn-success">Crear</a>
        {!! Form::close() !!}
  <br>
    <table class="table table-condensed table-striped table-bordered ">
            <thead class="nav nav-tabs white-text">
                <tr>
                  <th>ID</th>
                  <th>ID Seccion</th>
                  <th>Nombre Seccion</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="jumbotron">
                @foreach($secciones as $seccion)
                <tr>
                    <td>{{ $seccion->id }}</td>
                    <td>{{ $seccion->id_seccion }}</td>
                    <td>{{ $seccion->nombreseccion }}</td>
                    <td>
                         <a class="btn btn-primary " href="{{ url('desarrollosocial/secciones/' .$seccion->id .'/edit')}}" >Editar</a>
                         <a class="btn btn-danger " href="{{ route('secciones/destroy',['id' => $seccion->id] )}}" >Eliminar</a> 
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
<div class="floating">
    <a href="{{route('secciones.create')}}" class="btn btn-primary btn-fab">
      <i class="material-icons">add</i>
    </a>
  </div>
@endsection