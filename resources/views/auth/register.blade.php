@extends('layouts.master')

@section('content')
<div class="gssbody" id="gss_form_gral">
    <div class="gssform">
        <div class="gssform-toggle">
        </div> 
            <div class="gssform-panel one">
                <div class="gssform-header">
                    <div class="gssform-header"><h1>{{ __(' REGISTRATE') }}</h1>
                    <H6> y se parte de la comunidad LavaBien</H6>
                    </div>

                        <div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="gssform-group">
                                    <label for="name" >{{ __('Nombre') }}</label>
                                    <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="gssform-group" >
                                    <label for="email">{{ __('E-Mail') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="gssform-group">
                                    <label for="password" >{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="gssform-group" >
                                    <label for="password-confirm" >{{ __('Re-Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div >
                                    <div class="gssform-group mb-0" >
                                        <button type="submit">
                                            {{ __('Registrarse') }}
                                        </button>
                                    </div>
                            </form>
                        </div>
                </div>
            </div>

            <div class="gssform-panel two">
                <div class="gssform-header">
                <h1>REGISTRARME</h1>
                </div>
                <div class="gssform-content">
                    <h2>HOLA ACA VA MENSAJE</h2>
                 </div>
            </div>

    </div>
</div>

@endsection
