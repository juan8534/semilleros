@extends('admin.template.main')

@section('title','Semilleros')

@section('content')
  <table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>Nombre del semillero</th>
      <th>Creado por</th>
      <th>Acciones</th>
    </thead>
    <tbody>
      @foreach ($semilleros as $semillero)
        <tr>
          <td>{{ $semillero->id }}</td>
          <td>{{ $semillero->name }}</td>
          <td>{{ $semillero->user->name }}</td>
          <td>
            <a href="{{ route('semilleros.show', $semillero->id) }}" class="btn btn-primary">
            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('semilleros.create')}}" class="btn btn-primary pull-right">Crear semillero</a>
  <div class="text-center">
      {!! $semilleros->render() !!}
  </div>
@endsection
