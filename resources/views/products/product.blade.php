
@extends('layouts.master');
@section('content')  


 <main>
    <section >
        <div class="carrito"><a href="carrito.php"> </a></div>
        <h2 class="titulosgenerales pb-5 pt-5" id="titulo faq"><strong>Realiza tu pedido </strong></h2>
        <p class="tituloy "> <strong>Descubrí nuestros servicios de lavandería, planchado, lavado en seco para tus prendas más delicadas o la ropa de hogar.</strong></p>
    </section>

    <div class="container mt-4 mb-5">
    <div class="row "> 

        @foreach ($productos as $product)
            <div class="col-lg-4 col-md-6 mt-2 mb-4">  
                <div class="container">    
                    <img class="fotoProducto" src="{{$product->imagen}}" alt="">      
                </div>
                <h4 class="nombreProd">{{$product->nombre}}</h4>
                <p class="precio">Precio: <em class="precio">{{$product->precio}}</em> </p>
                <div class= "mb-5"> 
                    <button class="botonSubmit"><a href="{{ url('product-detail/'.$product->id)}}">Servicio</a></button>
                    <button class="botonSubmit"><a href="{{ url('add-to-cart/'.$product->id)}}"> Agregar</a></button>
                </div>

            </div>
        @endforeach

    </div>
    </div>
 </main>
 @endsection
