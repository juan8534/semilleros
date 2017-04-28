<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Default') | Panel de administracion</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/miestilo.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/fileinput/css/fileinput.css')}}">
    <link rel="stylesheet" href="">
  </head>
  <body>
      @include('admin.template.partials.nav')
    <div class="row">
      <section class="section-admin">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">@yield('title')</h1>
            </div>
            <div class="panel-body">
            @include('flash::message') <!--Incluimos los mensajes de notificaciones flash-->
            @include('admin.template.partials.errors')<!--Incluimos los errores de validaciones-->
            @yield('content')
            </div>
          </div>
        </div>
    </section>
  </div>


   <script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js')}}"></script>
   <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
   <script src="{{ asset('plugins/chosen/chosen.jquery.js')}}"></script>
   <script src="{{ asset('plugins/sweetalert/lib/sweetalert.js')}}"></script>
   <script src="{{ asset('plugins/trumbowy/trumbowyg.js')}}"></script>
   <script src="{{ asset('plugins/fileinput/js/fileinput.js')}}"></script>
   @yield('js')
  </body>
</html>
