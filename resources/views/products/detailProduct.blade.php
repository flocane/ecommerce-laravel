
@extends('layouts.master');
@section('content')  

<div class="container mt-4 mb-5">
    <div class="row "> 

            <div class="col-md-8">  
                <div class="cajaFoto">    
                    <img class="fotoProducto" src="{{asset($product->imagen)}}" alt="">      
                </div>
                <h4 class="nombreProd">{{$product->nombre}}</h4>
                <p class="precio">Precio: <em class="precio">{{$product->precio}}</em> </p>
            </div>

    </div>
    </div>
 </main>

@endsection