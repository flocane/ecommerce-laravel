
<nav class="navbar navbar-expand-lg  sticky-top  navbar-light  border border-white mt-4 ml-4 mr-4">
    <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
        <ul class="navbar-nav ml-auto " style="font-color:white">
            <li class="nav-item active ml-5">
                    <h4><a class="nav-link  text-white-50 font-weight-bold" href={{asset("home")}}>Home</a></h4>
            </li>
             {{-- se sacan estos links quedan en Footer --}}
            {{-- <li class="nav-item active">
                    <a class="nav-link text-white-50 font-weight-bold" href={{asset("FAQ")}}>FAQ</a>
            </li>
            <li class="nav-item active">
                    <a class="nav-link text-white-50 font-weight-bold" href={{asset("contact")}}>Contacto</a>
            </li> --}}
            <li class="nav-item active pl-5">
                <h4><a class="nav-link text-white-50 font-weight-bold " href={{asset("product")}}>Servicios</a></h4>
            </li>
            </ul>
        </ul>
    </div>
    <div class="mx-auto my-2 order-0 order-md-1 position-relative">
        <a class="mx-auto" href={{asset("home")}}>
            <img src="img/layout/logolavabien1.png"  width="300" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
        <ul class="navbar-nav mr-auto text-center">
            <li class="nav-link">
                <h4><a class="nav-link text-white-50 font-weight-bold" href={{asset("cart")}}>Carrito<i  class="fas fa-shopping-cart ml-3"></i></a></h4>
            </li>
@guest
            <li class="nav-link ">
                <h4><a id="login" class="nav-link text-white-50 font-weight-bold pr-5" href="{{route('login')}}">Ingresar</a></h4>
            </li>
            
@else
    <li class="nav-link">
        <h4><a class="nav-link text-white-50 font-weight-bold" href="{{url("perfil")}}">{{Auth::User()->name}}</a></h4>
    </li>
    @if (auth()->user()->rol == 9)
        <li class="nav-link">
            <h4><a class="nav-link text-white-50 font-weight-bold" href={{asset("perfilAdm")}}>Administrar</a></h4>
        </li>    
    @endif
    
    <li class="nav-link">
        <h4><a class="nav-link text-white-50 font-weight-bold" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}  <i class="fas fa-sign-out-alt"></i></a></h4>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
    </li>
@endguest
                    
                 
                  

                  {{-- La funcionalidad de registarse queda en en ingresar--}}
                  {{-- @if(!auth()->user())
                  <li class="nav-link">
                  <a class="nav-link text-white-50 font-weight-bold" href='{{ route('register') }}'>Registrarse</a>
                  </li>
                  @endif --}}
            </ul>
        </div>
    </nav>


