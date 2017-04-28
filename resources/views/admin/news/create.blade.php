@extends('admin.template.main')

@section('title','Agregar la noticia')

@section('content')
  {{Form::open(['route'=>'news.store', 'method'=>'POST'])}}
      <div class="form-group">
        {{Form::label('titulo', 'Titulo de la noticia')}}
        {{Form::text('titulo',null,['class' => 'form-control','placeholder' => 'Ingresa el titulo de la noticia'])}}
      </div>

      <div class="form-group">
        {{Form::label('content', 'Contenido de la notica')}}
        {{Form::textarea('content',null,['class' => 'form-control'])}}
      </div>

      <div class="form-group">
        {{ Form::submit('Publicar noticia',['class'=>'btn btn-primary'])}}
      </div>
  {{Form::close()}}

@endsection
