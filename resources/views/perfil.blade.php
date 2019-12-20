@extends('layouts.master')

@section('content')  

<div class="gsprofile fotoPerfilgral">

<!-- div de foto - avatar -->
    <div class="gssformprofile">
       <p class="gssFontProf2">Bienvenid@</p>
       <hr>

        <div class="container2">
             <div class="avatar2 backhoundIMG">

             <img src="/storage/avatar/{{Auth::user()->avatar}}"style="width:100%;" >
             
            </div>

        <p class='gssnombre'>{{Auth::user()->name}} {{Auth::user()->lastname}}</p>
       <button type="button" class='botonSubmit'> <a href="{{'/users/'.Auth::user()->id.'/edit/'}}">Editar Datos</a>

    </div>

   
<!-- div de datos -->          
    </div>

        <div class="gssformprofile">
        <p class="gssFontProf2">Mis Datos</p>
        <hr>
        <br>

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
            <label for="Direccion" class='campos'> Direccion de envio</label>
            <p class='gssnombre2'> {{Auth::user()->adress}}</p>
            <hr class="hr2">
        </div>
             
    </div>

<!-- div de ultimas compras -->     
    <div class="gssformprofile">
       <p class="gssFontProf2">Mis operaciones recientes</p>
       <hr>
        
       <p class="tamgss">Sector en construccion: Proximamente veras aqui tus ultimas operaciones</p>
   
    </div>


   

</div>
          

@endsection




