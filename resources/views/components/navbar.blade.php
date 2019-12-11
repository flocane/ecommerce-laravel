{{-- <nav class="navbar navbar-expand-lg navbar-light ml-4  border-bottom border-secondary">
    <a class="navbar-brand" href="/home"><img src="img/layout/LogoG.jpg" width="249" height="123"></a>
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
        <a class="nav-link" href={{asset("carrito")}}>Carrito<i class="fas fa-shopping-cart"></i></a>
      </li>
      --}}

    {{-- <form class="form-inline my-2 my-lg-0" action={{route('products.search')}} method="get">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button type="submit" name="search-submit" class="btn btn-secondary my-2 my-sm-0">Buscar</button>
    </form> --
    </div>
  </ul>
</div>
</nav> --}}

<nav class="navbar navbar-expand-lg ml-4 sticky-top  navbar-light  border border-white " style="background-color: #F99578" >
        <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
            <ul class="navbar-nav ml-auto text-center " style="font-color:white">
                <li class="nav-item active ">
                        <a class="nav-link text-white-50 font-weight-bold" href={{asset("home")}}>Home</a>
                </li>
                <li class="nav-item active">
                        <a class="nav-link text-white-50 font-weight-bold" href={{asset("FAQ")}}>FAQ</a>
                </li>
                <li class="nav-item active">
                        <a class="nav-link text-white-50 font-weight-bold" href={{asset("contact")}}>Contacto</a>
                </li>
                <li class="nav-item active">
                        <a class="nav-link text-white-50 font-weight-bold" href={{asset("product")}}>Servicios</a>
                </li>
                </ul>
            </ul>
        </div>
        <div class="mx-auto my-2 order-0 order-md-1 position-relative">
            <a class="mx-auto" href="#">
                <img src="img/layout/ironLogo.png"  class="rounded-circle"  width="140" height="140" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
            <ul class="navbar-nav mr-auto text-center">
                    @if(auth()->user())
                    <li class="nav-link">
                      <a class="nav-link text-white-50 font-weight-bold" href="{{url("perfil")}}">{{Auth::User()->name}}</a>
                    </li>
                  @endif
                  @if(auth()->user() && auth()->user()->role === 9)
                    <li class="nav-link">
                     <a class="nav-link text-white-50 font-weight-bold" href={{asset("perfilAdm")}}>Administrar</a>
                    </li>
                  @endif
                  @if(auth()->user())
                    <li class="nav-link">
                      <a class="nav-link text-white-50 font-weight-bold" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}  <i class="fas fa-sign-out-alt"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </li>
                  @else
                    <li class="nav-link ">
                        <a id="login" class="nav-link text-white-50 font-weight-bold" href='{{route('login')}}'>Ingresar</a>
                    </li>
                  @endif
                  @if(!auth()->user())
                  <li class="nav-link">
                  <a class="nav-link text-white-50 font-weight-bold" href='{{ route('register') }}'>Registrarse</a>
                  </li>
                  @endif
                  <li class="nav-link">
                        <a class="nav-link text-white-50 font-weight-bold" href={{asset("carrito")}}>Carrito<i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
        </div>
    </nav>


