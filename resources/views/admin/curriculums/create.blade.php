@extends('admin.template.main')

@section('title','Crear hoja de vida')

@section('content')
  {{Form::open(['route'=>'curriculums.store', 'method'=>'POST'])}}
      <div class="form-group">
        {{Form::label('name', 'Nombre completo')}}
        {{Form::text('name',null,['class' => 'form-control','placeholder' => 'Ingresa el nombre'])}}
      </div>

      <div class="form-group">
        {{Form::label('document_number', 'Numero de identificación')}}
        {{Form::number('document_number',null,['class' => 'form-control','placeholder' => 'Ingresa el numero de identificación'])}}
      </div>

      <div class="form-group">
        {{Form::label('birthdate', 'Fecha de nacimiento')}}
        {{Form::date('birthdate',null,['class' => 'form-control'])}}
      </div>

      <div class="form-group">
        {{Form::label('country', 'Nacionalidad')}}
        {{Form::text('country',null,['class' => 'form-control','placeholder' => 'Ingresa el pais de nacimiento'])}}
      </div>

      <div class="form-group">
        {{Form::label('city', 'Ciudad')}}
        {{Form::text('city',null,['class' => 'form-control','placeholder' => 'Ingresa la ciudad de nacimiento'])}}
      </div>

      <div class="form-group">
        {{Form::label('addres', 'Dirección')}}
        {{Form::text('addres',null,['class' => 'form-control','placeholder' => 'Ingresa tu direccion'])}}
      </div>

      <div class="form-group">
        {{Form::label('phone_number', 'Numero telefonico')}}
        {{Form::number('phone_number',null,['class' => 'form-control','placeholder' => 'Ingresa tu numero'])}}
      </div>

      <div class="form-group">
        {{Form::label('Correo', 'Ingresa tu correo')}}
        {{Form::email('email',null,['class' => 'form-control','placeholder' => 'example@mail.com'])}}
      </div>

      <div class="form-group">
        {{Form::label('profile', 'Perfil profesional')}}
        {{Form::textarea('profile',null,['class' => 'form-control'])}}
      </div>



      <div class="form-group">
        {{ Form::submit('Terminar',['class'=>'btn btn-primary'])}}
      </div>
  {{Form::close()}}

@endsection
