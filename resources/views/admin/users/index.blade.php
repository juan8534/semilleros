@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
      <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombres</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email}}</td>
              <td>
                @if ($user->type == "admin")
                  <span class="label label-danger">{{ $user->type }}</span>
                @elseif ($user->type == "student")
                  <span class="label label-primary">{{ $user->type }}</span>
                @elseif ($user->type == "professor")
                  <span class="label label-success">{{ $user->type }}</span>
                  @else
                  <span class="label label-warning">{{ $user->type }}</span>
                @endif
              </td>
              <td>
                <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"
                  aria-hidden="true"></span></a>

                  <a href="{{route('users.destroy', $user->id)}}" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-remove"
                aria-hidden="true"></span>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
      <a href="{{ route('users.create')}}" class="btn btn-primary pull-right">Crear usuario</a>
      <div class="text-center">
          {!! $users->render() !!}
        </div>

@endsection
