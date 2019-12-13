@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- <div class="gssbody" id="gss_form_gral">
    <div class="gssform">
      <div class="gssform-toggle"></div>
      <div class="gssform-panel one">
      <div class="gssform-header">
        <h1>Login</h1>
    </div>
    <div class="gssform-content">
        <form>
            <div class="gssform-group"><label for="inputEmail">Email</label>
              <input name="email" type="email" id="inputEmail" placeholder="Email" required="required"/> </div>

              <div class="gssform-group"><label for="inputAddress2">Password</label>
              <input type="password" id="Password" name="password" required="required" placeholder="Password" /></div>

              <div class="gssform-group"><label class="gssform-remember">
                <input type="checkbox" id="gridCheck"/>Remember Me</label><a class="gssform-recovery" href="#">Forgot Password?</a>

              </div>
              <div class="gssform-group"><button type="submit">Log In</button></div>

        </form>
      </div>
    </div>

    <div class="gssform-panel two">
      <div class="gssform-header">
        <h1>Registrarme</h1>
      </div>
      <div class="gssform-content">
        <form>
            <div class="gssform-group"><label for="full_name_id">Nombre</label>
              <input type="text" id="name" name="name" required="required" placeholder="Ingresar tu Nombre" /></div>

              <div class="gssform-group"><label for="full_name_id">Apellido</label>
              <input type="text" id="lastname" name="lastname" required="required" placeholder="Ingresar tu apellido" /></div>

            <div class="gssform-group"><label for="email">E-mail</label>
              <input type="email" id="email" name="email" placeholder="Ingresar tu e-mail" required="required" /></div>

              <div class="gssform-group"><label for="password">Contraseña</label>
              <input type="password" id="password" name="password" required="required" placeholder="Ingresar una Contraseña"/></div>

              <div class="gssform-group"><label for="repassword">Confirmar Contaseña</label>
              <input type="password" id="repassword" name="repassword" required="required" placeholder="Ingresar nuevamente la Contraseña" /></div>


            <div class="gssform-group"><button type="submit">Registrarme</button></div>
        </form>
    </div>
</div>
</div>

  </div> --}}
