@extends('admin.template.main')

@section('title', 'Formatos')

@section('content')
  <h4 class="text-left"><strong>Nombre del formato</strong></h4>
  <h4 class="text-left">{{ $formats->title }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Nota</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $formats->note }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Creado:</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $formats->created_at }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Subido por:</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $formats->user->name }}</h4>
  <div class="pull-right">
    @foreach ($formats->archivo as $arch) <!--Se recorre los archivos por medio de la relacion-->
      <a href="/semillero/public/archivos/formatos/{{$arch->name}}" download="{{$arch->name}}"
        class="btn btn-primary">descargar</a>
    @endforeach
  </div>
@endsection
