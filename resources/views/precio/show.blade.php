@extends('layouts.app')

@section('title', 'Ver')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Detalle Cancha Seleccionada</div>
          <div class="panel-body">
          <h1>{{ $data->name }}</h1>
          <table class="table table-striped table-hover">
            <tr>
              <td style="width: 200px;">Id</td>
              <td>{{ $data->id }}</td>
            </tr>
            <tr>
              <td>Propietario</td>
              <td>{{ $data->propietario }}</td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td>{{ $data->nombre }}</td>
            </tr>
            <tr>
              <td>Ancho</td>
              <td>{{ $data->ancho }}</td>
            </tr>
            <tr>
              <td>Largo</td>
              <td>{{ $data->largo }}</td>
            </tr>
            <tr>
              <td>Created At</td>
              <td>{{ $data->created_at }}</td>
            </tr>
            <tr>
              <td>Updated At</td>
              <td>{{ $data->updated_at }}</td>
            </tr>
            <tr>
              <td>Descripcion</td>
              <td>{{ $data->descripcion }}</td>
            </tr>
          </table>
          <hr>
          <table class="table">
          <thead class="thead-inverse">
          <tr>
          <th>Editar</th>
          <th>Eliminar</th>
          <th>Volver</th>
          </tr>
          </thead>
          <tbody>
            <tr>
            <td><a href="{{ route('canchas.edit', $data->id) }}" class="btn btn-primary">Editar Cancha</a></td>
            <td>{!! Form::open([
                'method' => 'DELETE',
                'route' => ['canchas.destroy', $data->id]
            ]) !!}
            {!! Form::submit('Borrar Cancha?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro Que Desea Eliminar Este Registro?')"]) !!}
            {!! Form::close() !!}</td>
            <td><a href="{{ route('canchas.index') }}" class="btn btn-info">Volver a todas las canchas</a></td>
            </tr>
          </tbody>
          </table>
@stop
