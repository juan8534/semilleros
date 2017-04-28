@extends('admin.template.main')

@section('title', 'Información semillero ')

@section('content')
  <h4 class="text-left"><strong>Nombre del semillero</strong></h4>
  <h4 class="text-left">{{ $semilleros->name }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Descripción</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $semilleros->description }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Fecha de creación:</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $semilleros->created_at }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Creado por:</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $semilleros->user->name }}</h4>
  <div class="text-right">
    <a href="{{route('groups.store')}}" class="btn btn-primary">Unirse al semillero</a>
  </div>
@endsection
