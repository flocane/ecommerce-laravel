@extends('layouts.master')
@section('content')
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
    <br>
    <br>
    <div class="col-6 my-3">
        <h1 class="text-center">Editar Usuario</h1>
        <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
    <form class="" action="/users/update/{{$user->id}}" method="POST" enctype="multipart/`form-data">
      
        @csrf
        <h1>Actualiza tus Datos</h1>
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
            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$user->last_name}}" required autocomplete="last_name" autofocus placeholder="Ingresar el Apellido">
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
            <input id="zipcode" type="zipcode" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{$user->zipcode}}" required autocomplete="zipcode" placeholder="Ingresar el Codigo Postal">
            @error('zipcode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group"> <!-- adress -->
            <label for="adress" class="control-label">Direccion</label>
            <input id="adress" type="adress" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{$user->adress}}" required autocomplete="adress" placeholder="Ingresa tu direccion">
            @error('adress')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @if(auth()->user() && auth()->user()->rol == 9)
        <div class="form-group"> <!-- ROL -->
            <label for="role" class="control-label">ROL</label>
            <input id="role" type="numer" class="form-control @error('role') is-invalid @enderror" name="role" value="{{$user->role}}" required autocomplete="Rol" placeholder="Ingresar 3 Usuarios o 9 si es Administrador">
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
        <button type="submit" class="btn btn-danger"> Actualizar </button>
        <a href="{{url('perfil')}}"><button type="button" class="btn btn-primary"><-Volver</button></a>
        </form>
</div>
@endsection