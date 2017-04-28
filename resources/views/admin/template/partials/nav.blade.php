<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if (Auth::user())
      <ul class="nav navbar-nav">
         @if (Auth::user()->admin()) <!--Solo el usuario administrador puede ver los usuarios-->
        <li><a href="{{ route('users.index')}}">Usuarios</a></li>
         @endif
        <li><a href="{{ route('documents.index')}}">Documentos</a></li>
        <li><a href="{{ route('formats.index')}}">Formatos</a></li>
        <li><a href="{{ route('news.index')}}">Noticias</a></li>
        <li><a href="{{ route('semilleros.index')}}">Semilleros</a></li>
        <li><a href="{{ route('curriculums.index')}}">Hojas de vida</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/logout') }}">Cerrar sesion</a></li>

          </ul>
        </li>
      @else
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/register') }}">Registrarce</a></li>
        <li><a href="{{ url('/login') }}">Iniciar sesion</a></li>
      </ul>
      </ul>

      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
