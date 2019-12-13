
@extends('layouts.master');
@section('content')  

<div class="container mt-4 mb-5">
    <div class="row "> 

            <div class="col-md-8"> 
                <h1 class=" mt-5 mb-3 detail-tituloy"> {{$product->nombre}}</h1>
                <h2 class=" mt-5 mb-3 detail-tituloy">Proceso de limpieza</h2>
                <p>Contamos con una estructura industrial con tecnologías de última generación con 2 líneas de procesos de 12 estaciones entre las que se encuentran el lavado, secado y planchado, que se complementa con un proceso auxiliar para ropa que requiere tratamiento especial y de reproceso.</p>
                <div class="container">    
                    <img class="fotoProducto " src="{{asset($product->imagen)}}" alt="">      
                </div>
                <p class="m-3"><strong>Descripcion del servicio:</strong><br> <em class="">{{$product->descripcion}}</em> </p>
                <p class="m-3">Precio: <em class="precio">{{$product->precio}}</em> </p>
            </div>

    </div>
    </div>
 </main>

@endsection