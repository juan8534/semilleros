@extends('admin.template.main')

@section('title', 'Crear semillero')

@section('content')
  {{Form::open(['route'=>'semilleros.store', 'method'=>'POST'])}}
      <div class="form-group">
        {{Form::label('name', 'Nombre del semillero')}}
        {{Form::text('name',null,['class' => 'form-control','placeholder' => 'Ingresa el nombre de tu semillero'])}}
      </div>

      <div class="form-group">
        {{Form::label('description', 'Descripción del semillero')}}
        {{Form::textarea('description',null,['class' => 'form-control'])}}
      </div>

      <div class="form-group">
        {{ Form::submit('Crear grupo',['class'=>'btn btn-primary'])}}
      </div>
  {{Form::close()}}
@endsection
