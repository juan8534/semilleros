@extends('admin.template.main')

@section('title', 'Formatos publicados')

@section('content')
  {!! Form::open(['route'=>'formats.index', 'method' => 'GET', 'class' =>
 'navbar-form pull-right'])!!}
     <div class="input-group">
         {!! Form::text('title', null, ['class' => 'form-control','placeholder' =>
           'Buscar Formato...','aria-describedby' => 'search'])!!}
         <span class="input-group-addon" id="search">
         <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
         </span>
     </div>
   {!! Form::close()!!}
    <table class="table table-striped">
      <thead>
        <th>Id</th>
        <th>Titulo</th>
        <th>Subido por</th>
        <th>Acciones</th>
      </thead>
      <tbody>
        @foreach ($formats as $format)
          <tr>
            <td>{{ $format->id }}</td>
            <td>{{ $format->title}}</td>
            <td>{{ $format->user->name }}</td>
            <td>
              <a href="{{ route('formats.show', $format->id )}}" class="btn btn-success">
              <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
              @foreach ($format->archivo as $arch) <!--Se recorre los archivos asociados al formato-->
                <a href="/semillero/public/archivos/formatos/{{$arch->name}}" download="{{$arch->name}}"
                  class="btn btn-primary"><span class="btn-primary glyphicon glyphicon-download"
                  aria-hidden="true"></span></a>  <!--Se descarga el archivo-->
              @endforeach
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-center">
      {{ $formats->render()}}
    </div>
    <div class="text-right">
      <a href="{{route('formats.create')}}" class="btn btn-primary">Publicar Formato</a>
    </div>

@endsection
