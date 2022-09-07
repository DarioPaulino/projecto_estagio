<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @includeIf('site.layout.head')
    <!-- Incluir o Head -->

<body>
  @include('sweetalert::alert')

	<!--_________________________CABECALHO________________________-->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
  	<img class="navbar-brand" src="{{asset('site/img/logo.png')}}" width="120" height="60">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('home')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('curso')}}">CURSOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('inscricao')}}">INSCRIÇÃO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('sobre')}}">SOBRE NÓS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contacto">CONTACTOS</a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="{{route('login')}}" class="login_menu">Login</a>
      </form>
    </div>
  </div>
</nav>

<main>
    @yield('content')
</main>
 

<!--________________________________PARTE1___________________________________-->
			
		
		<!--_______________________RODAPE_________________-->
        @includeIf('site.layout.footer')
	

</body>
<!-- Incluir as scriptJS -->


@includeIf('site.layout.scriptJS')
</html>