@extends('layouts.master');
@section('content')
<section  class="row banner">
    <article  class="col-sm-12 col-md-12 col-lg-12 mt-2 banner1">
        <img class=" img-fluid rounded mx-auto d-block b1" src="img/layout/bannerLaundry.jpg" alt="">
    </article>
</section>
<section class="row">           
<section class="card col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4 w-50">
<article class="card-body">
<h5 class="card-title titulosgenerales text-center"><strong>LAVANDERIAS LAVA BIEN</strong></h5>
<p class="card-text  text-center rta">En nuestras Sucursales Lava Bien desarrollamos tres procesos: 
Lavandería que incluye lavado en agua, secado en secarropas y doblado.
Plancha que incluye lavado en agua, secado en secarropas y planchado.
Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado.</p>
<div class="col-6 text-center" ><a href=productos.php><button type="button" class="btn btn-primary btn-md buttonsLanding" >NUESTROS PRODUCTOS</button></a></div>
</article>

</section> 

<section class="card col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4  w-50">
<article class="card-body">
<h5 class="card-title titulosgenerales text-center"><strong>COMUNIDAD LAVA BIEN </strong></h5>
<p class="card-text  text-center rta">En nuestras Sucursales Lava Bien desarrollamos tres procesos: 
Lavandería que incluye lavado en agua, secado en secarropas y doblado.
Plancha que incluye lavado en agua, secado en secarropas y planchado.
Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado..</p>
<div class="col-6 text-center" ><a href=registro.php> <button type="button" class="btn btn-primary btn-md buttonsLanding" >REGISTRATE</button></a></div> 
</article>
</section>

</section>




<section class="row seccion1">
    <article class="col-xs-12 col-md-6 col-lg-4 mt-4 img-fluid rounded mx-auto d-flex  justify-content-around flex-wrap">
        <img class="" src="img/layout/ironingServices.png">
       
    </article>
    <article class="col-xs-12 col-md-6 col-lg-4 mt-4 img-fluid rounded mx-auto d-flex  justify-content-around flex-wrap ">
        <img class="img-fluid rounded mx-auto d-block " src="img/layout/washingMachineServices.png">
        
    </article>
    <article class="col-xs-12 col-md-6 col-lg-4  mt-4 img-fluid rounded mx-auto d-flex  justify-content-around flex-wrap">
        <img class="" src="img/layout/dryCleaningServices.png">
        
    </article>
</section>


<section class="card mt-4 w-75">
<article class="col-md-12 col-sm-12 col-lg-12  card-body">
<h5 class="card-title titulosgenerales text-center"><strong>MAS SOBRE NOSOTROS</strong></h5>
<p class="card-text  text-center rta">Somos una de las cadenas lider en el tratamiento, entrega y logistica de prendas de vestir, surgio con la idea de cubrir
las necesidad de disminuir los tiempos de entrega asegurando la calidad de servicio, utilizando solo productos de alta calidad,
pensando siempre en el medio ambiente. Nuestro servicios personalizados permiten asegurar que puedas elegir el producto que mas 
se adapte a  tus necesidades.</p>
<div class="col-md-12 text-center"><a href="#ABOUT.php" class="btn btn-primary text-center">NOSOTROS</a></div>
</article>
</section>

@endsection