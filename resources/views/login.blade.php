@extends('layouts.master');
@section('content')  

<!-- GSS: codigo anterior
    <section class="mt-4">
      <div class="col-12">
        <legend class="text-center header titulosgenerales">LOGIN</legend>
      </div>
      <form action="" method="POST">
        <div class="container">


          <div class="form-row mt-4">
            <div class="form-group txtHorizontal col-sm-12 col-md-8 col-lg-8">
              <label for="inputEmail"><strong>Email</strong></label>
              <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>

            <div class="form-group col-sm-12 col-md-8 col-lg-8">
              <label for="inputAddress2"><strong>Password</strong></label>
              <input name="password" type="password" class="form-control" id="Password" placeholder="Password">
            </div>
          </div>
          <div class="form-group col-sm-12 col-md-8 col-lg-8">
            <div class="form-check">
              <button type="submit" class="btn btn-primary"><strong>Sign in</strong></button>
              <div>
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Remember me
                </label>
              </div>

            </div>
      </form>
      <br>
-->
      <div class="gssbody" id="gss_form_gral">
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
      
      </div>



    </section>
  @endsection