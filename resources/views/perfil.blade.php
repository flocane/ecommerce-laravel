@extends('layouts.master');
@section('content')  
<body>
   @dd(Auth::user())
  <br>
  <br>
  <br>
  <div class=container2 col 12>
    <div class="profile col-4">
      <div>
          @if ((Auth::User()->avatar))
          <img width="40px" style="border-radius:50%" src="{{asset('storage/avatars/'.Auth::User()->avatar)}}" alt="avatar">
          @endif
          <img width="40px" style="border-radius:50%" src="img/avatardefault.png" alt="avatar">
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
                <h1>Mis datos</h1>
              
                <button type="button" class="btn btn-danger"> <a class="nav-link" href="{{route('user.edit')}}">Editar Datos
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