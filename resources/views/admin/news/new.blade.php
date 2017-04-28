@extends('admin.template.main')

@section('title', 'Noticia numero '. $news->id )

@section('content')
  <h4 class="text-left"><strong>Titulo de la noticia</strong></h4>
  <h4 class="text-left">{{ $news->titulo }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Contenido</strong>
  </h4>
  <hr>
  <article class="text-left">{{ $news->content }}</article>
  <hr>
  <h4 class="text-left">
    <strong>Creado:</strong>
  </h4>
  <hr>
  <h4 class="text-left">{{ $news->created_at }}</h4>
  <hr>
  <h4 class="text-left">
    <strong>Subido por:</strong>
  </h4>
  <hr>
  <h5 class="text-left">{{ $news->user->name }}</h5>
  <!--Plugin de comentarios en facebook-->
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <div class="fb-comments" data-href="http://localhost/semilleros/public/news/{{ $news->id}}"
      data-numposts="5"></div>
  </div>
@endsection
