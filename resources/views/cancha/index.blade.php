@extends('layouts.app')

@section('content')
<br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Lista de Canchas</div>
            <div class="panel-body">

                  <table class="table">
                  <thead class="thead-inverse">
                  <tr>
                  <th>Cancha ID</th>
                  <th>Usuario ID</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <td colspan="4" style="text-align:center"><a title="Agregar" href="{!! url('canchas/create') !!}">Agregar Cancha<img src="{{ asset('imgs/agregar.png') }}" alt="editar" style="width:25px;"/></a></td>
                    </tr>
                  <tfoot>
                  <tbody>
                  @foreach ($list as $e)
                    </tr>
                    <tr>
                    <td>{{ $e->id }}</td>
                    <td><p>{{ $e->id_Usuario }}</p></td>
                    <td><a title="Ver" href="{{ route('canchas.show', $e) }}"><img src="{{ asset('imgs/ver.png') }}" alt="ver" style="width:25px;"/></a></td>
                    <td><a title="Editar" href="{{ route('canchas.edit', $e->id) }}"><img src="{{ asset('imgs/editar.png') }}" alt="editar" style="width:25px;"/></a></td>

                    <td>
                      {!! Form::open(['method' => 'DELETE','route' => ['canchas.destroy', $e->id]]) !!}
                      {!! Form::submit('Borrar esta Cancha?', ['class' => 'btn btn-danger']) !!}
                      {!! Form::close() !!}
                    </td>
                    </tr>
                    <!--<p>{ $e->user->nombre }}</p>-->
                  @endforeach
                  </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>
@stop
