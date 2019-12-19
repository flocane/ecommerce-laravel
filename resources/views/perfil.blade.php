<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

@extends('layouts.master');

@section('content')  

<div class='gssbienvenido gsprofileTitulo'>

</div>



<div class="gsprofile">

<!-- div de foto - avatar -->
    <div class="gssformprofile">
       <p class="gssFontProf2">Bienvenid@</p>

        <div class="container2">
             <div class="avatar2 backhoundIMG">
        </div>

        <p class='gssnombre'>{{Auth::user()->name}} {{Auth::user()->lastname}}</p>
        <button class='btn btn-outline-secondary boton'>actualizar mi foto de perfil</button>
        <button type="button" class='btn btn-outline-secondary boton'> <a href="{{'/users/'.Auth::user()->id.'/edit/'}}">Editar Datos</a>

    </div>

   
<!-- div de datos - avatar -->          
    </div>

        <div class="gssformprofile">
        <p class="gssFontProf2">Mis Datos</p>

        <div class="aline">
            <label for="Nombre y apellido" class='campos'> Nombre y Apellido</label>
            <p class='gssnombre2'> {{Auth::user()->name}} {{Auth::user()->last_name}}  </p>
            <hr class="hr2">
        </div>

        <div class="">
            <label for="Email" class='campos'> E-Mail</label>
            <p class='gssnombre2'> {{Auth::user()->email}}  </p>
            <hr class="hr2">
        </div>

        <div class="">
            <label for="Direccion" class='campos'> Direccion</label>
            <p class='gssnombre2'> {{Auth::user()->adress}}</p>
            <hr class="hr2">
        </div>
             
    </div>

<!-- div de datos - avatar -->     
    <div class="gssformprofile">
       <p class="gssFontProf2">Mis operaciones recientes</p>

       

    </div>
             
    </div>


   

</div>
          

@endsection




