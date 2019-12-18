@extends('layouts.master')

@section('content')


<div class="gssbody" id="gss_form_gral">
    <div class="gssform">
        <div class="gssform-toggle">
        </div>
            <div class="gssform-panel one">
                <div class="gssform-header"> 
                    <h1>{{ __('Acceder') }}</h1>
                    <H6> y se parte de la comunidad LavaBien</H6>
                </div>

                    <div class="gssform-content">
                        <form method="POST" action="{{ route('login') }}"> 
                            @csrf

                            <div class="gssform-group">
                                <label 
                                for="email">{{ __('E-Mail Address') }}
                                </label> 
                                                    
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            

                            <div class="gssform-group">
                                <label for="password" >{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="gssform-group">
                                        <label class="gssform-remember" for="remember">
                                        {{ __('Remember Me') }}
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        </label>                        
                                        
                                        @if (Route::has('password.request'))
                                        <a class="gssform-recovery" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                            </div>

                            <div class="gssform-group mb-0">

                                    <button type="submit">
                                        {{ __('Login') }}
                                    </button>   
                            </div>
                        </form>
                    </div>
            </div>

            <div class="gssform-panel two">
                <div class="gssform-header">
                <h1>QUERES REGISTRARTE?</h1>
                </div>
                <div class="gssform-content">
                    
                    
                     <button class='gsstransparent_btn' type="submit" id='noposeo'>Resgistrate ahora</button>
                    
                    <div class='imagenRegister'></div>
                    <img src="img/layout/registro.png" width="300" >
                    
                 </div>
            </div>
    
    </div>
</div>

  @endsection