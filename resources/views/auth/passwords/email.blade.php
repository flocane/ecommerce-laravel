@extends('layouts.master')
@section('content')


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="formulario col-6 pssMailResetForm">
        <div class="bar ">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
        <section class="row mt-5" id="titulo  faq col-md-12 col-sm-12 col-lg-8 ">
    <p class="titulosgenerales" > <strong>Reestablecer Contraseña</strong></p>
</section>

<form class="form-horizontal" for="email" id="formulario" action="{{ route('password.email') }}" method="POST">
    @csrf
    <fieldset>
        <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- Nombre -->
        <label for="email" class="control-label"><strong>{{ __('E-Mail Address') }}</strong></label>
        <input type="text" class="form-control @error('email') is-invalid" @enderror id="email" name="email" value="{{old('email')}}" autofocus placeholder="Ingresar Correro">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    <div id="errorEmail"></div>
    </div>
        <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <div class=" form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- Boton de Enviar-->
          <div class="col-md-12 text-center">
           <button type="submit" class="btn btn-primary btn-lg">Reestablecer</button>
          </div>
        </div>
    </fieldset>
</form>
</div>
<script src="{{asset('js/formularioContact.js')}}"></script>
@endsection


