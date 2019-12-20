@extends('layouts.master')
@section('content')  

<body>
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
               <button type="button" class='btn btn-outline-secondary boton'> <a href="{{'/users/'.Auth::user()->id.'/edit/'}}">Mis Datos</a>
                
        
            </div>
        
           
        <!-- div de datos -->          
            </div>
        
                <div class="gssformprofile">
                <p class="gssFontProf2">Datos Usuarios</p>
                <hr>
                <br>
        
                <div class="aline">
                    <label for="Nombre y apellido" class='campos'> Listado Usuarios</label>
                    <p class='gssnombre2'><button type="button" class="btn btn-outline-secondary boton"> <a class="nav-link" href="{{'/users/index'}}">Listado Usuarios
                    </a>  </p>
                    <hr class="hr2">
                </div>
        
                <div class="">
                    <label for="Email" class='campos'> Productos</label>
                    <p class='gssnombre2'>  <button type="button" class="btn btn-outline-secondary boton"> <a class="nav-link" href="{{'/products/index'}}">Ver Productos
                    </a> </p>
                    <p class='gssnombre2'>   <button type="button" class="btnbtn-outline-secondary boton"> <a class="nav-link" href="{{'/products/create'}}">Agregar Producto
                    </a></p>
                    <hr class="hr2">
                </div>
        
            </div> 
        
  </body>
  
@endsection