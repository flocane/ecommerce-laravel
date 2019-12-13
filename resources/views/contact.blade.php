@extends('layouts.master');
@section('content')
<div class="formulario col-6">
        <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
<form class="form-horizontal" action="" method="POST">
    <fieldset>
      
        <legend class="text-center header titulosgenerales ">Formulario de Contacto</legend>
        <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- Nombre -->
        <label for="full_name_id" class="control-label"><strong>Nombre</strong></label>
        <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Ingresar Nombre">
        </div>
        <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- Apellido -->
        <label for="apellido" class="control-label"><strong>Apellido</strong></label>
        <input type="text" class="form-control" id="Apellido" name="apellido" placeholder="Ingresar Apellido">
        </div>
        <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- Domicilio -->
            <label for="domicilio" class="control-label"><strong>Domicilio</strong></label>
            <input type="text" class="form-control" id="Domicilio" name="domicilio" placeholder="Ingresar su Domiclio">
        </div>
        <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- Telefono -->
            <label for="telefono" class="control-label"><strong>Telefono</strong></label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresar numero telefonico de Conctato">
        </div>
        <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- E-mail -->
            <label for="email" class="control-label"><strong>E-mail</strong></label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Ingresar numero e-mail de Conctato">
        </div>
        <div class="form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- Ciudad-->
            <label for="ciudad" class="control-label"><strong>Ciudad</strong></label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad o Localidad">
        </div>
        <div class="form-group  mt-4 col-sm-12 col-md-8 col-lg-8"><!-- Contacto-->
            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"><strong>Contacto</strong></i>
            </span>
        <div class=" mt-4 col-sm-12 col-md-12 col-lg-12"> <!-- Ingresar la Consulta-->
            <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Ingrese la consulta." rows="7"></textarea>
        </div>
        <div class=" form-group mt-4 col-sm-12 col-md-8 col-lg-8"> <!-- Boton de Enviar-->
          <div class="col-md-12 text-center">
           <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
          </div>
        </div>
    </fieldset>
</form>
</div>
    
@endsection