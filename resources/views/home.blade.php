@extends('layouts.master');
@section('content');
<body>
    <div class="tm-container mx-auto">
        <section class="tm-section tm-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tm-bg-circle-white tm-flex-center-v">
                            <header class="text-center">
                                <h1 class="tm-site-title">Lavabien</h1>
                                <p class="tm-site-subtitle">Servicio de lavanderia</p>
                            </header>
                            <p>&nbsp;&nbsp;&nbsp; En nuestras Sucursales Lava Bien desarrollamos tres procesos:
                                Lavandería que incluye lavado en agua, secado en secarropas y doblado.
                                Plancha que incluye lavado en agua, secado en secarropas y planchado.
                                Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado.</p   >
                            <p class="text-center mt-4 mb-0">
                                <a data-scroll href="{{asset('product')}}" class="btn tm-btn-secondary">Servicios</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-section-2" class="tm-section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 tm-flex-center-v tm-text-container tm-section-left">
                        <h2 class="tm-color-secondary mb-4">COMUNIDAD LAVA BIEN </h2>
                        <p class="mb-4">&nbsp;&nbsp;&nbsp;En nuestras Sucursales Lava Bien desarrollamos tres procesos:
                            Lavandería que incluye lavado en agua, secado en secarropas y doblado.
                            Plancha que incluye lavado en agua, secado en secarropas y planchado.
                            Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado.</p>
                        <p class="text-right mb-0">
                            <a href="{{ route('register') }}" class="btn tm-btn-secondary">Registrate</a>
                        </p>
                    </div>
                    <div class="col-xl-7 col-lg-6 tm-circle-img-container">
                        <img src="img/laundryHome2.jpg" alt="Image" class="rounded-circle tm-circle-img">
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-section-3" class="tm-section tm-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 tm-section-2-right">
                        <div class="tm-bg-circle-white tm-bg-circle-pad-2 tm-flex-center-v">
                            <header>
                                <h2 class="tm-color-primary mr-4">MAS SOBRE NOSOTROS</h2>
                            </header>
                            <p>&nbsp;&nbsp;&nbsp;Somos una de las cadenas lider en el tratamiento, entrega y logistica de prendas de vestir, surgio con la idea de cubrir
                                las necesidad de disminuir los tiempos de entrega asegurando la calidad de servicio, utilizando solo productos de alta calidad,
                                pensando siempre en el medio ambiente.
                            </p>
                            <p class="text-center mt-5  mb-0">
                                <a data-scroll href="{{asset('contact')}}" class="btn tm-btn-secondary">Contactanos</a>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- <section  class="row mt-5">
        <div id="carousel ExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/content/comunidadLaveBien.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/content/comunidadLaveBien.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/content/comunidadLaveBien.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div> -->
<!-- </section>
<section class="row">
<section class="card col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4 w-50">
<article class="card-body">
<h5 class="card-title titulosgenerales text-center"><strong>LAVANDERIAS LAVA BIEN</strong></h5>
<p class="card-text  text-center rta">En nuestras Sucursales Lava Bien desarrollamos tres procesos:
Lavandería que incluye lavado en agua, secado en secarropas y doblado.
Plancha que incluye lavado en agua, secado en secarropas y planchado.
Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado.</p>
<div class="col-6 text-center" ><a href={{asset("product")}}><button type="button" class="btn btn-primary btn-md buttonsLanding" >NUESTROS PRODUCTOS</button></a></div>
</article>

</section>

<section class="card col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4  w-50">
<article class="card-body">
<h5 class="card-title titulosgenerales text-center"><strong>COMUNIDAD LAVA BIEN </strong></h5>
<p class="card-text  text-center rta">En nuestras Sucursales Lava Bien desarrollamos tres procesos:
Lavandería que incluye lavado en agua, secado en secarropas y doblado.
Plancha que incluye lavado en agua, secado en secarropas y planchado.
Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado..</p>
<div class="col-6 text-center" ><a href="{{ route('register') }}"> <button type="button" class="btn btn-primary btn-md buttonsLanding" >REGISTRATE</button></a></div>
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
<div class="col-md-12 text-center"><a href="{{asset("FAQ")}}" class="btn btn-primary text-center">NOSOTROS</a></div>
</article>
</section> -->

@endsection
