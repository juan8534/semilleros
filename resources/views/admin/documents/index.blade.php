@extends('admin.template.main')

@section('title', 'Documentos publicados')

@section('content')
  {!! Form::open(['route'=>'documents.index', 'method' => 'GET', 'class' =>
 'navbar-form pull-right'])!!}
   <div class="input-group">
       {!! Form::text('title', null, ['class' => 'form-control','placeholder' =>
         'Buscar documento...','aria-describedby' => 'search'])!!}
       <span class="input-group-addon" id="search">
       <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
       </span>
   </div>
 {!! Form::close()!!}

  <div class="row">
  <div class="col-md-12">
    <div class="row">

      @foreach ($documents as $document)

      <div class="col-md-4">
        <div class="panel panel-success">
          <div class="panel-body" >
            <h3 class="text-center">{{$document->title}}</h3>
              <a href="{{ route('documents.show', $document->id) }}">
                @foreach ($document->image as $img)
                  <img class="img-tamaño" src="{{ asset('archivos/imagenes/' . $img->name)}}">
                @endforeach
               </a>
            <hr>
            <div class="form-group">
              <div class="pull-right">
                <i class="glyphicon glyphicon-time"></i>
                {{ $document->created_at->diffForHumans()}} <!--metodo para mostrar fecha para humanos-->
              </div>
              <div class="pull-left">
                  <h6><span class="label label-primary">Subido por: {{ $document->user->name}}</span></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </div>
    <div class="row">
      <div class="text-center">
        {!! $documents->render() !!}
      </div>
      <div class="text-right">
        <a href="{{route('documents.create')}}" class="btn btn-primary">Publicar documento</a>
      </div>
    </div>



@endsection
