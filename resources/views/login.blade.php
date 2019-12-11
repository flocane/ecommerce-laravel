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
            <h1>Account Login</h1>
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
            <h1>Register Account</h1>
          </div>
          <div class="gssform-content">
            <form>
                <div class="gssform-group"><label for="username">Username</label><input type="text" id="username" name="username" required="required" /></div>
                <div class="gssform-group"><label for="password">Password</label><input type="password" id="password" name="password" required="required" /></div>
                <div class="gssform-group"><label for="cpassword">Confirm Password</label><input type="password" id="cpassword" name="cpassword" required="required" /></div>
                <div class="gssform-group"><label for="email">Email Address</label><input type="email" id="email" name="email" required="required" /></div>
                <div class="gssform-group"><button type="submit">Register</button></div>
            </form>
        </div>
    </div>
</div>
      
      </div>



    </section>
  @endsection