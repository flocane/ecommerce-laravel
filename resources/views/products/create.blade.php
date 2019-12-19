@extends('layouts.master')
@include('partials.navbar')
@section('content')
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
    <h1 class="text-center">Agregar Nuevo Producto Aurora</h1>
    <img src="{{asset('img/Logo_aurora.png')}}" alt="Logo de Aurora Materiales">
    <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
    </div>
    <form class="form-group" action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{ old("name") }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" name="description" value="{{ old("description") }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="stock_id">Stock</label>
            <input type="text" name="stock_id" value="{{ old("stock_id") }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="text" name="price" value="{{ old("price") }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="categories">Categoria</label>
            <select class="form-control" name="category_id">
                <option value="" disabled selected>Seleccione la Categoria</option>
            @foreach($categories as $category)
            @if ($category->id == old("category_id"))
                <option value="{{ $category->id }}" selected>
                {{ $category->name }}
                </option>
            @else
                <option value="{{ $category->id }}">
                {{ $category->name }}
                </option>
            @endif
            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label for="product_img">Imagen Del Producto</label>
            <input class="form-control" type="file" name="picture">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Agregar Producto" id="addProduct">
        </div>
    </form>
</div>
@endsection
