@extends('admin.template.main')

@section('title', 'Subir Formato')

@section('content')
    {!! Form::open(['route'=>'formats.store', 'method' => 'POST', 'files' => true ])!!}
        <div class="form-group">
          {!! Form::label('title', 'Titulo')!!}
          {!! Form::text('title', null, ['class' => 'form-control','placeholder' => 'Agrega un titulo'
            ,'requiered']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('note', 'Nota')!!}
          {!! Form::textarea('note', null, ['class' => 'form-control','requiered']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('file', 'Archivo')!!}
          {!! Form::file('file',['class' => 'input-image'])!!}
        </div>

        <div class="form-group">
          {{ Form::submit('Subir Archivo',['class'=>'btn btn-primary'])}}
        </div>
    {!! Form::close()!!}
@endsection
@section('js')
  <script>
    $('.input-image').fileinput();
  </script>
@endsection
