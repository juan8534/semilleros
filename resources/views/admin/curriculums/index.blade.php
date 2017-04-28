@extends('admin.template.main')

@section('title', 'Hojas de vida usuarios')

@section('content')
      <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombres</th>
            <th>Creado</th>
            <th>Acciones</th>
        </thead>
          <tbody>
            @foreach ($curriculums as $curriculum)
              <tr>
                <td>{{ $curriculum->id }}</td>
                <td>{{ $curriculum->name }}</td>
                <td>{{ $curriculum->created_at }}</td>
                <td>
                  <a href="{{ route('curriculums.show', $curriculum->id )}}" class="btn btn-primary">
                  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                  </a>
                </td>
              </tr>
            @endforeach

          </tbody>
      </table>
      <a href="{{ route('curriculums.create')}}" class="btn btn-primary pull-right">Crear hoja de vida</a>
      <div class="text-center">
          {!! $curriculums->render() !!}
        </div>

@endsection
