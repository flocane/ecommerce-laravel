<nav class="navbar navbar-expand-lg navbar-light ml-4  border-bottom border-secondary ">
    <a class="navbar-brand" href="/home">Lavadero LavaBien</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-link">
      <a class="nav-link" href={{asset("home")}}>Home</a>
    </li>
    <li class="nav-link">
      <a class="nav-link" href={{asset("FAQ")}}>FAQ</a>
    </li>
    <li class="nav-link">
      <a class="nav-link" href={{asset("contact")}}>Contacto</a>
    </li>
    <li class="nav-link">
        <a class="nav-link" href={{asset("carrito")}}>Carrito<i class="fas fa-shopping-cart">({{ isset(session('carrito')['products']) ? count(session('carrito')['products']) : 0 }})</i></a>
      </li>
    @if(auth()->user())
      <li class="nav-link">
        <a class="nav-link" href="{{url("perfil/")}}">{{Auth::User()->name}}</a>
      </li>
    @endif
    @if(auth()->user() && auth()->user()->role === 9)
      <li class="nav-link">
       <a class="nav-link" href={{asset("perfilAdm")}}>Administrar</a>
      </li>
    @endif
    @if(auth()->user())
      <li class="nav-link">
        <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">{{ __('Logout') }}  <i class="fas fa-sign-out-alt"></i></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
          </form>
      </li>
    @else
      <li class="nav-link">
          <a id="login" class="nav-link" href={{asset("login")}}>Ingresar</a>
      </li>
    @endif
    @if(!auth()->user())
    <li class="nav-link">
    <a class="nav-link" href="/register">Registrarse</a>
    </li>
    @endif
    <form class="form-inline my-2 my-lg-0" action={{route('products.search')}} method="get">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button type="submit" name="search-submit" class="btn btn-secondary my-2 my-sm-0">Buscar</button>
    </form>
    </div>
  </ul>
</div>
</nav>
