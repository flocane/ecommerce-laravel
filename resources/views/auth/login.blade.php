@extends('layouts.master')

@section('content')


<div class="gssbody" id="gss_form_gral">
    <div class="gssform">
        <div class="gssform-toggle">
        </div>
            <div class="gssform-panel one">
                <div class="gssform-header"> 
                    <h1>{{ __('Login') }}</h1>
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
</div>

  @endsection