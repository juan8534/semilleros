@extends('admin.template.main')

@section('title', 'Ultimas noticias')

@section('content')
  <table class="table table-striped">
    <thead>
      <th>Titulo</th>
      <th>Subida por</th>
      <th>Fecha publicación</th>
      <th>Acciones</th>
    </thead>
    <tbody>
      @foreach ($news as $new)
        <tr>
          <td>{{ $new->titulo}}</td>
          <td>{{ $new->user->name}}</td>
          <td>{{ $new->created_at}}</td>
          <td>
            <a href="{{ route('news.show', $new->id) }}" class="btn btn-primary">
            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
            </a>

          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('news.create')}}" class="btn btn-primary pull-right">Crear Noticia</a>
  <div class="text-center">
      {!! $news->render() !!}
  </div>


@endsection
