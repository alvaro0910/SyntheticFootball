@extends('layouts.app')

@section('title', 'Ver')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Detalle Reserva Seleccionada</div>
          <div class="panel-body">
          @foreach ($list as $data)
          <table class="table table-striped table-hover">
            <tr>
              <td style="width: 200px;">Id Reserva</td>
              <td>{{ $data->id }}</td>
            </tr>
            <tr>
              <td>Cliente</td>
              <td>{{ $data->nomusu ." ". $data->apellido }}</td>
            </tr>
            <tr>
              <td>Cliente Telefono</td>
              <td>{{ $data->telefono }}</td>
            </tr>
            <tr>
              <td>Cliente E-mail</td>
              <td>{{ $data->email }}</td>
            </tr>
            <tr>
              <td>Nombre Cancha</td>
              <td>{{ $data->nombre }}</td>
            </tr>
            <tr>
              <td>Descripcion Cancha</td>
              <td>{{ $data->descripcion }}</td>
            </tr>
            <tr>
              <td>Fecha Reserva</td>
              <td>{{ $data->dia }}</td>
            </tr>
            <tr>
              <td>Hora Inicial</td>
              <td>{{ $data->hora_Inicial }}</td>
            </tr>
            <tr>
              <td>Hora Final</td>
              <td>{{ $data->hora_Final }}</td>
            </tr>
            <tr>
              <td>Fecha Creacion</td>
              <td>{{ $data->created_at }}</td>
            </tr>
            <tr>
              <td>Fecha Actualizacion</td>
              <td>{{ $data->updated_at }}</td>
            </tr>
            <tr>
              <td>Observacion Reserva</td>
              <td>{{ $data->observacion }}</td>
            </tr>
          </table>
          @endforeach
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
            <td><a href="{{ route('reservasusu.edit', $data->id) }}" class="btn btn-primary">Editar Reserva</a></td>
            <td>{!! Form::open([
                'method' => 'DELETE',
                'route' => ['reservasusu.destroy', $data->id]
            ]) !!}
            {!! Form::submit('Borrar Reserva?', ['class' => 'btn btn-danger' , 'onclick' => "return confirm('¿Seguro Que Desea Eliminar la Reserva?')"]) !!}
            {!! Form::close() !!}</td>
            <td><a href="{{ route('reservasusu.index') }}" class="btn btn-info">Volver a todas las reservas</a></td>
            </tr>
          </tbody>
          </table>

          <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
          <script>
          @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
              case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
              case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
              case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
              case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
            }
          @endif
          </script>
@stop
