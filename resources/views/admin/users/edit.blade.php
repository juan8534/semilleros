@extends('admin.template.main')


@section('title', 'Editar usuario')

@section('content')
    {!! Form::open(['route'=>['users.update', $user->id],'method'=>'PUT'])!!}
        <div class="form-group">
          {!! Form::label('name', 'Nombre') !!}
          {!! Form::text('name', $user->name, ['class' => 'form-control','placeholder' => 'Nombre comleto', 'required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('email', 'Correo') !!}
          {!! Form::email('email', $user->email, ['class' => 'form-control','placeholder' => 'mail@example.com', 'required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('password', 'Contraseña')!!}
          {!! Form::password('password', ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('type', 'Tipo')!!}
          {!! Form::select('type', ['student' => 'Estudiante','professor' => 'Profesor','admin' => 'Administrador',
            'graduated' => 'Egresado'],$user->type, ['class'=>'form-control',
            'placeholder' => 'Selecciones una opción...', 'required'])!!}
        </div>

        <div class="form-group">
        {!! Form::submit('Editar', ['class'=> 'btn btn-primary'])!!}
        </div>
    {!! Form::close()!!}
@endsection
