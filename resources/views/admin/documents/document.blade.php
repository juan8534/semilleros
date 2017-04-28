@extends('admin.template.main')

@section('title', 'Documentos publicados')

@section('content')
  <h4 class="text-left"><strong>Nombre del formato</strong></h4>
  <h4 class="text-left">{{ $documents->title }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Nota</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $documents->note }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Creado:</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $documents->created_at }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Subido por:</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $documents->user->name }}</h4>
  <div class="pull-right">
    @foreach ($documents->image as $img)
      <a data-target="#verimagen" data-toggle="modal" class="btn btn-success">visualizar</a>
     <!--Se recorre los archivos por medio de la relacion-->
      <a href="/semillero/public/archivos/imagenes/{{$img->name}}" download="{{$img->name}}"
        class="btn btn-primary">descargar</a>
      @include('admin.template.modales.modalimagen')
    @endforeach
  </div>
@endsection
