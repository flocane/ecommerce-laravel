@extends('layouts.master');
@section('content')  
@if (Auth::User()->rol != 9){
    return redirect()->route('home');
}
    
@endif
<body>

  <br>
  <br>
  <br>
  <div class=container2 col 12>
    <div class="profile col-4">
      <div>
          @if ((Auth::User()->avatar))
          <img width="40px" style="border-radius:50%" src="{{asset('storage/avatars/'.Auth::User()->avatar)}}" alt="avatar">
          @else
          <img width="40px" style="border-radius:50%" src="img/avatardefault.png" alt="avatar">
          @endif
          
      </div>
              <h1>Bienvenido/a:</h1>
              <br>
              {{Auth::user()->name}} {{Auth::user()->lastname}}
              <br>
              <button type="button" class="btn btn-danger"> <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                  </form>
              </button>
              <div class="bar">
                  <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
              </div>
                  <h2> {{Auth::user()->email}}  </h2>
              
              <div class="bar">
                  <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
              </div>
      </div>
      <div class="profile col-4">
                <h1>Usuarios</h1>
              
                <button type="button" class="btn btn-danger"> <a class="nav-link" href="{{'/users/'.Auth::user()->id.'/edit/'}}">Mis Datos
                    </a>
                    <button type="button" class="btn btn-danger"> <a class="nav-link" href="{{'/users/index'}}">Listado Usuarios
                    </a>
                  

                    </form>
                </button>
                <div class="bar">
                    <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
                </div>
                    <h2> {{Auth::user()->email}}  </h2>
                
                <div class="bar">
                    <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
                </div>
        </div>
        <div class="profile col-4">
            <h1>Productos</h1>
          
            <button type="button" class="btn btn-danger"> <a class="nav-link" href="{{'/products/index'}}">Ver Productos
                </a>
              

                </form>
            </button>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
                <h2> {{Auth::user()->email}}  </h2>
            
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
    </div>
  </body>
  
@endsection