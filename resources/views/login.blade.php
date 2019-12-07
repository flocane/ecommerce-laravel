@extends('layouts.master');
@section('content')  

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
    </section>
  @endsection