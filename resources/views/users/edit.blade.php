@extends('layouts.master')
@section('content')

<div class="gsprofile fotoPerfilgral">

<div class='fader'>


<div class="container-fluid">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <br>
    <div class="col-6 my-3">
        @if ($user->rol = 9)
        <h3 class="text-center">Editar mis datos</h3>
        @endif
        <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
    <form class="" action="/users/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
      
        @csrf
        @if ($user->rol != 9)
        <h1>Actualiza tus Datos</h1>
        @endif
      
        
        <div class="form-group"> <!-- Nombre -->
            <label for="full_name_id" class="control-label">Nombre</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus placeholder="Ingresar el Nombre">
            @error('name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group"> <!-- Apellido -->
            <label for="apellido" class="control-label">Apellido</label>
            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$user->last_name}}" autocomplete="last_name" autofocus placeholder="Ingresar el Apellido">
            @error('last_name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror  
        </div>
        <div class="form-group"> <!-- E-mail -->
            <label for="email" class="control-label">E-mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email" placeholder="Ingresar el E-Mail">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group"> <!-- Zipcode -->
            <label for="zipcode" class="control-label">Codigo Postal</label>
            <input id="zipcode" type="zipcode" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{$user->zipcode}}"  autocomplete="zipcode" placeholder="Ingresar el Codigo Postal">
            @error('zipcode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group"> <!-- adress -->
            <label for="adress" class="control-label">Direccion</label>
            <input id="adress" type="adress" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{$user->adress}}"  autocomplete="adress" placeholder="Ingresa tu direccion">
            @error('adress')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="Gssupload-btn-wrapper"> <!-- avatar -->
        <label for="adress" class="control-label">Foto de perfil</label>
            <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" required>
        </div>   

        @if(auth()->user() && auth()->user()->rol == 9)
        <div class="form-group"> <!-- ROL -->
            <label for="role" class="control-label">ROL</label>
            <input id="role" type="numer" class="form-control @error('role') is-invalid @enderror" name="role" value="{{$user->role}}"  autocomplete="Rol" placeholder="Ingresar 3 Usuarios o 9 si es Administrador">
            @error('role')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @endif
        <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
        <button type="submit" class="botonSubmit"> Actualizar </button>
        @if (auth()->user()->rol == 9)
        <a href="{{'/users/index'}}"><button type="button" class="botonSubmit"><-Volver</button></a>
           
       @else
       <a href="{{url('perfil')}}"><button type="button" class="botonSubmit"><-Volver</button></a>
       @endif
        
        </form>



    </div>



</div>

</div>
@endsection