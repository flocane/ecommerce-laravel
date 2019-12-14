<nav class="navbar navbar-expand-lg ml-4 sticky-top  navbar-light  border border-white mt-4 " style="background-color: #F99578" >
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
            <a class="mx-auto" href={{asset("home")}}>
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
                        <a id="login" class="nav-link text-white-50 font-weight-bold" href="{{route('login')}}">Ingresar</a>
                    </li>
                  @endif
                  @if(!auth()->user())
                  <li class="nav-link">
                  <a class="nav-link text-white-50 font-weight-bold" href='{{ route('register') }}'>Registrarse</a>
                  </li>
                  @endif
                  <li class="nav-link">
                        <a class="nav-link text-white-50 font-weight-bold" href={{asset("cart")}}>Carrito<i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
        </div>
    </nav>


