@extends('admin.template.main')

@section('title', 'Hoja de vida')

@section('content')
  <h4 class="text-left"><strong>Nombres Completos</strong></h4>
  <h4 class="text-left">{{ $curriculums->name }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Numero de identificacion</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $curriculums->document_number }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Fecha de nacimiento</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $curriculums->birthdate }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Pais de origen</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $curriculums->country }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Ciudad de residencia</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $curriculums->city }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Dirección</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $curriculums->addres }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Numero telefonico</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $curriculums->phone_number }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Correo</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $curriculums->email }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Perfil profesional</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $curriculums->profile }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Fecha de creación</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $curriculums->created_at }}</h4>
@endsection
