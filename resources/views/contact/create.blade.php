@extends('layouts.master');
@section('content')
<div class="formulario col-6">
        <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
        <section class="row mt-5" id="titulo  faq col-md-12 col-sm-12 col-lg-8 ">
    <p class="titulosgenerales" > <strong>Formulario de Contacto</strong></p>
</section>
<form class="form-horizontal" id="formulario" action="" method="POST">
    <fieldset>
        <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- Nombre -->
        <label for="name" class="control-label"><strong>Nombre Completo</strong></label>
        <input type="text" class="form-control @error('name') is-invalid" @enderror id="name" name="name" value="{{old('name')}}" autofocus placeholder="Ingresar Nombre">
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    <div id="errorName"></div>
    </div>
        <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- Telefono -->
            <label for="phone" class="control-label"><strong>Telefono</strong></label>
            <input type="text" class="form-control @error('phone') is-invalid" @enderror  id="phone" name="phone" value="{{old('phone')}}" autofocus placeholder="Ingresar numero telefonico">
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        <div id="errorPhone"></div>
        </div>

        <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- E-mail -->
            <label for="email" class="control-label"><strong>E-mail</strong></label>
            <input type="text" class="form-control  @error('email') is-invalid" @enderror id="email" name="email" value="{{old('email')}}" autofocus placeholder="Ingresar  E-mail ">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        <div id="errorEmail"></div>
        </div>

        <div class="form-group  mt-4 col-sm-12 col-md-8 col-lg-8"><!-- Contacto-->
            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"><strong>Contacto</strong></i>
            </span>
        <div class=" mt-4 col-sm-12 col-md-12 col-lg-12"> <!-- Ingresar la Consulta-->
            <textarea class="form-control @error('mensaje') is-invalid"@enderror id="mensaje" name="mensaje" value={{old('mensaje')}}  autofocus placeholder="Ingrese la consulta." rows="7"  ></textarea>
            @error('mensaje')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        <div id="errorMensaje"></div>
        </div>
        </div>
       @csrf
        <div class=" form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- Boton de Enviar-->
          <div class="col-md-12 text-center">
           <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
          </div>
        </div>
    </fieldset>
</form>
</div>
<script src="{{asset('js/formularioContact.js')}}"></script>
@endsection
