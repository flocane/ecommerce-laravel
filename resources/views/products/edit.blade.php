@extends('layouts.master')
@section('content')
<div class='fader'>
@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<br>
<br>
<br>
<div class="carrito col-6">
    <h1 class="text-center">Editar Servicios</h1>
   
    <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
    </div>
<form class='form-group' method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data" >
            
            @csrf
        
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$product->nombre}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" name="description" value="{{$product->descripcion}}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="text" name="price" value="{{$product->precio}}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="imagen">Imagen Del Producto</label>
            <input class="form-control" type="file" name="imagen">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Editar Producto" id="editProduct">
            <a href="{{url('perfilAdm')}}"><button type="button" class="btn btn-info"><-Volver</button></a>
        </div>
    </form>
</div>
</div>
@endsection
