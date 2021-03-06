@extends('layouts.app')

@section('title', 'Editar')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Editar Cancha</div>
          <div class="panel-body">
          <p class="lead">Edite la Informacion de la Cancha.</p>
          <hr>
          {!! Form::model($data, [
            'method' => 'PUT',
            'route' => ['canchas.update', $data->id]
          ]) !!}

          <div class="form-group">
            <label for="nombre" class="control-label">Nombre</label>
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            <label for="ancho" class="control-label">Ancho</label>
            {!! Form::text('ancho', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            <label for="largo" class="control-label">Largo</label>
            {!! Form::text('largo', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            <label for="descripcion" class="control-label">Descripcion</label>
            {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::submit('Actualizar Cancha', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
          </div>
          <div class="form-group">
            <a title="Regresar" href="{{ route('canchas.index') }}" ><img src="{{ asset('imgs/regresar.png') }}" alt="ver" style="width:25px;"/>Regresar</a>
          </div>

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
