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
                            <form id="formulario"  class="formReg" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="gssform-group">
                                    <label for="name" >{{ __('Usuario') }}</label>
                                    <input  autofocus id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Ingrese su usuario">

                                        @error('name')
                                            <span role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <p id="errorname"><!--aca iria el error--><p>

                                </div>

                                <div class="gssform-group" >
                                    <label for="email">{{ __('E-Mail') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingrese su E-Mail">

                                        <!--@error('email')
                                            <span role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror -->

                                        <p id="errorEmail"><!--aca iria el error--><p>
                                </div>

                                <div class="gssform-group">
                                    <label for="password" >{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Ingrese su contraseña">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <p id="errorPassword"><!--aca iria el error--><p>
                                </div>

                                <div class="gssform-group" >
                                    <label for="password-confirm" >{{ __('Re-Password') }}</label>
                                    <input id="passwordRepeat" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Ingrese nuevamente su contraseña">
                                
                                         <p id="errorPasswordRepeat"><!--aca iria el error--><p>
                                </div>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="termsCondition" name="termsCondition">
                                    <label class="gssform-remember" for="termsCondition">Acepto 
                                        <button id="termsConditionButton" type="button" class="btn btn-link" data-toggle="modal" data-target="#termsConditionModal">términos y condiciones</button></label>
                                    <div id="errorTerminos"></div>  

                                    <p id="errorTerminos"><!--aca iria el error--><p>

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

    <!-- Modal de Términos y Condiciones -->
    <div id="termsConditionModal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Términos y condiciones</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="terms-text">
            El Usuario que utilice el sitio web podrá proporcionar algunos datos personales a efectos de mantenerse en contacto y recibir información respecto de servicios que se pongan a disposición de la persona en relación a los servicios utilizados.
            La Subsecretaría de Gobierno Digital, con domicilio legal en Av. Roque Sáenz Peña 511, es la responsable de las Bases de Datos a las que se incorporarán los datos personales suministrados. Las mismas han sido debidamente registradas ante la Dirección Nacional de Protección de Datos Personales en los términos de la Ley de Protección de Datos Personales, Nº 25.326.
            El Administrador se ocupa de que el Usuario cuente con la información veraz y necesaria para decidir de forma expresa, libre y voluntaria si desea brindar sus datos personales, informando a tal efecto las consecuencias de hacerlo, de la negativa y de la inexactitud de los mismos.
            En ningún caso proporcionar los datos personales es condición para el uso del sitio web y sus servicios vinculados. No obstante, si el Usuario decide voluntariamente proporcionar sus datos personales debe brindar datos veraces, exactos y completos. La inexactitud de los mismos puede suponer dificultades para establecer un vínculo directo con el Administrador.
            La Subsecretaría de Gobierno Digital conservará los datos personales brindados por los Usuarios hasta el momento en que se encuentre extinguida la finalidad para la cual fueron recolectados o hasta tanto el titular de dichos datos lo solicite.
            El responsable de las Bases de datos puede también ceder los datos personales recolectados a otras Dependencias y Organismos dependientes del Sector Público Nacional siempre que tal cesión se corresponda con las competencias de la Dependencia u Organismo cesionario, en los términos del Artículo 11 inc.3 ap. b y c de la Ley Nº 25.326.
            El titular de los datos personales podrá solicitar la actualización, rectificación y, cuando corresponda, la supresión o el sometimiento a confidencialidad de los datos personales provistos, pudiendo acceder en forma gratuita, a intervalos no inferiores a seis meses, a la Base de datos habilitada, la cual se encuentra debidamente inscripta por la Disposición 9 - E/2016, de la Subsecretaría de Gobierno Digital, parte de la Secretaría de Gestión e Innovación Pública, del Ministerio de Modernización en los términos de la Ley de Protección de Datos Personales, Nº 25.326, y sus normas complementarias, salvo que se acredite un interés legítimo a tal fin, conforme lo establecido en el artículo 14, inciso 3 de la Ley N° 25.326.
            La Dirección Nacional de Protección de Datos Personales, órgano de control de la Ley N° 25.326, tiene la atribución de atender las denuncias y reclamos que se formulen con relación al incumplimiento de las normas sobre protección de datos personales.    
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /Modal de Términos y Condiciones -->

@endsection
