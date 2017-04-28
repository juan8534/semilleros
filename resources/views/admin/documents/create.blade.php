@extends('admin.template.main')

@section('title', 'Publicar imagen')

@section('content')
  {!! Form::open(['route' => 'documents.store', 'method' => 'POST', 'files' => true])!!}
        <div class="form-group">
          {!! Form::label('title', 'Titulo') !!}
          {!! Form::text('title', null, ['class' => 'form-control','placeholder' => 'Agrega un titulo'
            ,'requiered'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('note', 'Nota') !!}
          {!! Form::textarea('note', null, ['class' => 'form-control','requiered'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('image', 'Imagen')!!}
          {!! Form::file('image',['class' => 'input-image'])!!}
        </div>
        <div class="form-group">
          {{ Form::submit('Publicar imagen',['class'=>'btn btn-primary'])}}
        </div>
  {!! Form::close()!!}
@endsection
@section('js')
  <script>
    $('.input-image').fileinput();
  </script>
@endsection
