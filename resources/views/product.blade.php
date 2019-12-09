@extends('layouts.master');
@section('content')  


<nav class="gral">
 <main>
    <section >
        <div class="carrito"><a href="carrito.php"> <i class="shopping-cart"></i></a></div>
        <p class="titulosgenerales" > <strong> Hacé tu pedido</strong></p>
        <p class="bajada">Descubrí nuestros servicios de lavandería, planchado o lavado en seco para tus prendas más delicadas o la ropa de hogar.</p>
    </section>

    <div class="container">
    <div class="row "> 

        <?php foreach ($products as $key => $producto) :?>
            <div class="col-md-4 col-sm-6 mt-5 mb-5">  
                <div class="cajaFoto">    
                    <img class="fotoProducto" src="<?=$producto['imagen'];?>" alt="">      
                </div>
                <h4 class="nombreProd"><?=$producto['nombre'];?></h4>
                <p class="precio">Precio: <em class="precio"><?=$producto['precio'];?></em> </p>
                <div class= mb-5> 
                    <button class="botonSubmit"><a href="carrito.php"> Agregar</a></button>
                </div>
            </div>
        <?php endforeach;?>

    </div>
    </div>
 </main>
 @endsection
